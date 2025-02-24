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
            'id' => $this->faker->uuid, // Genera un ID único (puedes usar string o un ID específico)  
            'method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']), // Métodos de pago  
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']), // Estados del pago  
            // Suponiendo que "order" es una relación, puedes generar una referencia a una orden:  
            'order_id' => \App\Models\Order::factory(), // Suponiendo que tienes un modelo Order  
        ];  
    }  
}