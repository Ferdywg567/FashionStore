<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /**
     * Get the transcation that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transcation()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    /**
     * Get the product that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
