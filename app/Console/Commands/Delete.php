<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Latest;
use Illuminate\Console\Command;

class Delete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trash:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete the trash data';

    /**
     * Execute the console command.
     */
    public function handle()
    {    
        $contact = Contact::onlyTrashed();
        $contact->forceDelete();

        $blog = Blog::onlyTrashed();
        $blog->forceDelete(); 

        $latest = Latest::onlyTrashed();
        $latest->forceDelete();
        
        $this->info('Deleted');
        //return logger('this is a new log'.date('d-m-y H:i:s'));
    }
}