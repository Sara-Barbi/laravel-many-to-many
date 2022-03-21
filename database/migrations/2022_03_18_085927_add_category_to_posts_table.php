[09:57, 18/3/2022] Sara Barbi: <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')
            ->nullable()
            ->constrained()
            ->OnDelete('set null'); 
            //se si cancella la categoria, il post sarà null
            
            /*
            $table->usignedBigInteger('category_id');    //foreign key, che sta nel one
            
            $table->foreign('category_id')    //foreign key
            ->references('id')
            ->on('categories')
            ->nullable()
            ->nullOnDelete(); 
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);  //prima prendo la mia foreign key
            $table->dropColumn('category_id');   //poi creo la colonna
        });
    
    }
}