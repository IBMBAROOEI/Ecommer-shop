<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearPendingOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this comment clear order pending';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param $id
     * @return void
     */
    public function handle()
    {
        Order::where('status', 'pending')->delete();
        $this->info('All pending orders are deleted successfully!');
    }
}
