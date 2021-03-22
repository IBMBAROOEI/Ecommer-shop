<?php


namespace App\Repositories\ProductRepositories;


use App\Models\Product;
use http\Env\Request;

class ProductRepositories implements ProductRepositoriesInterface
{
    protected $Product;
    public function __construct( Product $product)
    {
        $this->Product =$product;
    }
    public function all()
    {

         return $this->Product->withoutRelations($this->with(['Brand','Categorie','Sub_Category']))->simplePaginate(2);
    }

    public  function latest(){

      return $this->Product->orderBy('created_at', 'desc')->take(50)->simplePaginate(5);
    }


    public function edit($id)
    {
        return $this->Product->findOrFail($id);

    }


    public function create(array $data)
    {
        return $this->Product->create($data);

    }




    public function update(array $data, $id)
    {
        $record = $this->Product->find($id);

        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->Product->destroy($id);
    }

    public function show($id)
    {

        return $this->Product->findOrFail($id);
    }


    public function image($id)
    {
       return $this->Product->withoutRelations($this->with('picture'))->findOrFail($id);
    }

    public function deleteOldImage($id){
        return $this->Product->find($id);
    }

     //Eager load database relationships
    public function with($relations)
    {
           return $this->Product->with($relations);
    }
}