<?php

namespace App\Observers;

use App\Models\Attr__Product;
use App\Models\Order;
use App\Models\Order_Dtail;

class Attr__ProductObserver
{
    /**
     * Handle the Attr__Product "created" event.
     *
     * @param  \App\Models\Attr__Product  $attr__Product
     * @return void
     */
    public function created(Attr__Product $attr__Product)
    {

    }

    /**
     * Handle the Attr__Product "updated" event.
     *
     * @param  \App\Models\Attr__Product  $attr__Product
     * @return void
     */
    public function updated(Attr__Product $attr__Product)
    {
//   $d= Order_Dtail::select('atribute_id','quntity')->get();
//$at=Attr__Product::where('id',$d->sku[0])->first();
//
//Attr__Product::where('sku',$d->sku[0])->update(['stock'=>$d->quntity-$at->stock]);
//

    }
    public function deleted(Attr__Product $attr__Product)
    {
        //
    }

    public function restored(Attr__Product $attr__Product)
    {
        //
    }

    /**
     * Handle the Attr__Product "force deleted" event.
     *
     * @param  \App\Models\Attr__Product  $attr__Product
     * @return void
     */
    public function forceDeleted(Attr__Product $attr__Product)
    {
        //
    }
}
