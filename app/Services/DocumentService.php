<?php 
namespace App\Services;
use App\Document;
use App\Repositories\DocumentRepository;
use Illuminate\Http\Request;
use Auth;
use Image;
 
class DocumentService
{

	public function __construct(DocumentRepository $document)
	{
		$this->document = $document;
	}
	 
	public function index()
	{
		return $this->document->all();
	}

	public function guest($userid){
		return $this->document->guest($userid);
	}
	 
	public function store(Request $request)
	{
	   $data = $request->all();

	   $image = $request->file('image');
	   $name = time().'.'.$image->getClientOriginalName();
	   $destinationPath = public_path('images/');
	   $img = Image::make($image->getRealPath());	
	   $img->resize(500, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.$name);
	   //$image->move($destinationPath, $name);
	   
	   $data['image'] = $name;
	   $data['user_id'] = Auth::id();
	   $data['type'] = 'Guest';
	   $this->document->store($data);

	   return redirect()->route('document.index')
                       ->with('success','Image Upload successfully');
			   
	}
	 
	public function read($id)
	{
	     return $this->document->find($id);
	}
	 
	public function update(Request $request, $id)
	{
	   	$attributes = $request->all();
	   	return $this->document->update($id, $attributes);
	}
 
	public function delete($id)
	{
	    return $this->document->delete($id);
	}

}