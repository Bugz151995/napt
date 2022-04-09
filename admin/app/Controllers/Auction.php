<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

use \App\Models\LotModel;

class Auction extends BaseController
{
    /**
     * create an lot
     *
     * @return mixed
     */
    public function create()
    {
        $model = new LotModel();
        $time  = new Time('now');

        $id = esc($this->request->getPost('inventory_id'));
        $stock = esc($this->request->getPost('quantity'));

        $data = [
            'quantity'       => $stock,
            'reserve_price'  => esc($this->request->getPost('reserve_price')) * 100,
            'estimate_price' => esc($this->request->getPost('estimate_price')) * 100,
            'bid_increment'  => esc($this->request->getPost('bid_increment')) * 100,
            'starts_at'      => $time->toDateTimeString(),
            'ends_at'        => esc($this->request->getPost('ends_at')),
            'inventory_id'   => $id,
            'status'         => 1
        ];

        $res = $model->insert($data);

        if ($res)
            session()->setTempdata('success', 'A new lot was successfully created.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong. Please contact system support.', 1); 

        return redirect()->to('inventory/'.$id.'/'.$stock);
    }

    /**
     * addToFeatured a lot
     *
     * @return mixed
     */
    public function addToFeatured()
    {
        $model = new LotModel();

        $id = esc($this->request->getPost('lot_id'));
        
        $data = [
            'is_featured' => 1
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'The lot was successfully featured.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong. Please contact system support.', 1); 
        
        return redirect()->back();
    }

    /**
     * removeFromFeatured a lot
     *
     * @return mixed
     */
    public function removeFromFeatured()
    {
        $model = new LotModel();

        $id = esc($this->request->getPost('lot_id'));
        
        $data = [
            'is_featured' => 0
        ];

        $res = $model->update($id, $data);

        if ($res)
            session()->setTempdata('success', 'The lot was successfully removed from featured.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong. Please contact system support.', 1); 
        
        return redirect()->back();
    }

    /**
     * delete an lot
     *
     * @return mixed
     */
    public function delete()
    {
        $model = new LotModel();
        $id = esc($this->request->getPost('lot_id'));
        $res = $model->delete($id);

        if ($res)
            session()->setTempdata('success', 'An item was successfully deleted from auction.', 1);
        else
            session()->setTempdata('error', 'Oops! Something went wrong. Please contact system support.', 1);

        return redirect()->back();
    }

    /**
     * fetch an lot
     *
     * @param string $id [lot_id]
     *
     * @return string<JSON>
     */
    public function fetch($id)
    {
        $model = new LotModel();

        $select = 'lot_id, obverse_img, reverse_img, item_name';
        $data = $model->select($select)
            ->join('inventories', 'inventories.inventory_id = lots.inventory_id')
            ->find($id);
            
        return json_encode($data);
    }
}
