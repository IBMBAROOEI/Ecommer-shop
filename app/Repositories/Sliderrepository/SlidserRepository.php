<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2021-03-17
 * Time: 11:56 PM
 */

namespace App\Repositories\Sliderrepository;


use App\Models\Slider;

class SlidserRepository implements SliderRepositorylnterface
{
    protected $slider;
    public function __construct(Slider $slider)
    {
        $this->Slider =$slider;
    }
    public function all()
    {
        return $this->Slider->get();
    }

    public function edit($id)
    {
        return $this->Slider->findOrFail($id);

    }


    public function create(array $data)
    {
        return $this->Slider->create($data);

    }




    public function update(array $data, $id)
    {
        $record = $this->Product->find($id);

        return $record->update($data);
    }

    public function delete($id)
    {

        return $this->slider->destroy($id);
    }

    public function deleteOldImage($id){
         return $this->slider->find($id);
    }


    public function show($id)
    {

        return $this->Product->findOrFail($id);
    }




    //Eager load database relationships
    public function with($relations)
    {
        return $this->Product->with($relations);
    }

}