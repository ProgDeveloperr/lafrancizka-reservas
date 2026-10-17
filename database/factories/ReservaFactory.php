<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    public function definition(): array
    {
        $horarios = [
            '12:00',
            '12:30',
            '13:00',
            '13:30',
            '14:00',
            '14:30',
            '20:00',
            '20:30',
            '21:00',
            '21:30',
            '22:00',
            '22:30',
            '23:00',
        ];

        return [
            'nombre_cliente' => fake()->name(),
            'email' => fake()->safeEmail(),
            'telefono' => fake()->phoneNumber(),

            'fecha' => fake()
                ->dateTimeBetween('+1 day', '+2 months')
                ->format('Y-m-d'),

            'hora' => fake()->randomElement($horarios),

            'cantidad_personas' => fake()->numberBetween(1, 10),

            'observaciones' => fake()->optional(0.6)->randomElement([
                'Preferencia por una mesa tranquila.',
                'Solicita mesa cerca de una ventana.',
                'Uno de los comensales es vegetariano.',
                'La reserva corresponde a un cumpleaños.',
                'Prefiere una mesa alejada de la entrada.',
                'Asiste con un menor.',
                'Solicita espacio suficiente para un cochecito.',
            ]),
        ];
    }
}