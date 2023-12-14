<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
    public function viewItem($itemId)
    {
        $item = Item::find($itemId);

        $this->pushDataToGTM('view_item', $item);

        return view('view_item', ['item' => $item]);
    }

    public function addToCart($itemId)
    {
        $item = Item::find($itemId);

        $this->pushDataToGTM('add_to_cart', $item);

        return view('add_to_cart', ['item' => $item]);
    }

    public function viewCart()
    {
        $this->pushDataToGTM('view_cart', $cartData);

        return view('view_cart');
    }

    public function purchase()
    {
        $this->pushDataToGTM('purchase', $purchaseData);

        return view('purchase');
    }

    private function pushDataToGTM($action, $data)
    {
        $dataLayer = [];

        switch ($action) {
            case 'view_item':
                $dataLayer[] = [
                    'event' => 'view_item',
                    'item_name' => $data->name,
                    'item_brand' => $data->brand,
                    'item_id' => $data->id,
                    'item_category' => $data->category,
                    'item_price' => $data->price,
                ];
                break;

            case 'add_to_cart':
                $dataLayer[] = [
                    'event' => 'add_to_cart',
                    'item_name' => $data->name,
                    'item_brand' => $data->brand,
                    'item_id' => $data->id,
                    'item_category' => $data->category,
                    'item_price' => $data->price,
                ];
                break;


            default:
                break;
        }

        echo '<script>';
        echo 'window.dataLayer = window.dataLayer || [];';
        echo 'window.dataLayer.push(' . json_encode($dataLayer) . ');';
        echo '</script>';
    }
}
