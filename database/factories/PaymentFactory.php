<?php  

namespace Database\Factories;  

use App\Models\Payment;  
use Illuminate\Database\Eloquent\Factories\Factory;  

class PaymentFactory extends Factory  
{  
    protected $model = Payment::class;  

    public function definition(): array  
    {  
        return [  
            'id' => $this->faker->uuid,
            'method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']), 
            'order_id' => \App\Models\Order::factory(),   
        ];  
    }  
}