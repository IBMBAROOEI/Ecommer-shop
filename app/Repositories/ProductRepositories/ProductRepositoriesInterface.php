<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/6/2020
 * Time: 5:35 PM
 */

namespace App\Repositories\ProductRepositories;
interface ProductRepositoriesInterface
{
    public  function all();

    public function create(array $data);
    public function update(array $data, $id);
    public function edit( $id);
    public function delete($id);
    public function deleteOldImage($id);
    public function show($id);
    public  function latest();




}