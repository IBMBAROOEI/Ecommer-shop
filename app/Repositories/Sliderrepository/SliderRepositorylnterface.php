<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2021-03-17
 * Time: 11:57 PM
 */

namespace App\Repositories\Sliderrepository;


interface SliderRepositorylnterface
{
    public  function all();

    public function create(array $data);
    public function update(array $data, $id);
    public function edit( $id);
    public function delete($id);
    public function deleteOldImage($id);
    public function show($id);
}