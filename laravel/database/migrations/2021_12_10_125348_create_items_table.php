<?php

use App\Models\Item;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->integer('quantidade');
            $table->string('marca');
            $table->boolean('garantia');
            $table->timestamps();
        });

        $this->newItem("Saco de Lixo", 50, "Limpe Sempre", true);
        $this->newItem("Luvas", 1100, "Limpeza++", false);
        $this->newItem("Óculos de Proteção", 80, "AxxxxT", true);
        $this->newItem("Espátulas de Remoção", 120, "Limpeza++", true);
        $this->newItem("Detergente", 12000, "Limpeza++", false);
        $this->newItem("Sabão em Pó", 15000, "Limpeza++", false);
        $this->newItem("Sabão de Álcool", 2000, "Limpe Sempre", false);
        $this->newItem("Esponja", 30000, "Clean77", true);
        $this->newItem("Palha de Aço", 8000, "Limpeza++", true);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }

    private function newItem($item, $quantidade, $marca, $garantia) {
        $newItem = new Item();
        $newItem->item = $item;
        $newItem->quantidade = $quantidade;
        $newItem->marca = $marca;
        $newItem->garantia = $garantia;
        $newItem->save();
    }
}
