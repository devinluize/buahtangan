<?php

namespace Database\Seeders;

use App\Models\Step;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            'path'=>'assets/plant-detail.png',
            'title'=>'Preparing Soil',
            'step_desc'=>'Lets Prepare Soil for the little Fella!',
            'step_desc_first'=>"Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.",
            'step_desc_second'=>"To prepare the soil, begin by removing any weeds, rocks, or debris from the area. Loosen the soil with a garden fork or tiller to a depth of about 6-8 inches. This will improve soil aeration and drainage. Add organic matter like compost or well-rotted manure to the soil. Mix it in thoroughly to enhance soil fertility and improve moisture retention. Aim to achieve a slightly acidic to neutral pH level, typically around 6.5. This will create optimal growing conditions for your spinach. Finally, level the soil surface and create rows or beds for planting, leaving adequate space between rows to ensure good air circulation and easy harvesting.

            Spinach prefers cool, moist conditions, so be sure to maintain consistent soil moisture throughout the growing season. Applying a layer of mulch can help retain moisture and reduce weed competition. With well-prepared soil and proper care, you can enjoy a healthy and productive spinach crop in your garden."
        ]);
        Step::create([
            'path'=>'assets/planting.jpeg', // Change the path to your desired image
            'title'=>'Planting', // Title changed to "Planting"
            'step_desc'=>'How would you like to plant them', // New step description
            'step_desc_first'=>"Planting seeds is an essential step in the growth process. Begin by selecting high-quality seeds suited for your region and desired plants. Check seed packets for planting depth and spacing instructions. Prepare the planting area by clearing any debris and loosening the soil to create a suitable environment for germination.", // Modified step description
            'step_desc_second'=>"Follow the recommended planting depth and spacing for each type of seed. Gently press seeds into the soil and cover them with a fine layer of soil. Water the planted area gently to ensure proper moisture. Consider providing appropriate environmental conditions, such as sunlight and temperature, as different plants have varying requirements for optimal growth. With careful planting and nurturing, watch your seeds sprout and grow into healthy plants."
        ]);
        Step::create([
            'path'=>'assets/picture.png', // Change the path to your desired image
            'title'=>'Picture the lil fella!', // Title changed to "Planting"
            'step_desc'=>'Capture this special part of their life', // New step description
            'step_desc_first'=>"Planting seeds is an essential step in the growth process. Begin by selecting high-quality seeds suited for your region and desired plants. Check seed packets for planting depth and spacing instructions. Prepare the planting area by clearing any debris and loosening the soil to create a suitable environment for germination.Planting seeds is an essential step in the growth process. Begin by selecting high-quality seeds suited for your region and desired plants. Check seed packets for planting depth and spacing instructions. Prepare the planting area by clearing any debris and loosening the soil to create a suitable environment for germination.", // Modified step description
            'step_desc_second'=>"Follow the recommended planting depth and spacing for each type of seed. Gently press seeds into the soil and cover them with a fine layer of soil. Water the planted area gently to ensure proper moisture. Consider providing appropriate environmental conditions, such as sunlight and temperature, as different plants have varying requirements for optimal growth. With careful planting and nurturing, watch your seeds sprout and grow into healthy plants.Planting seeds is an essential step in the growth process. Begin by selecting high-quality seeds suited for your region and desired plants. Check seed packets for planting depth and spacing instructions. Prepare the planting area by clearing any debris and loosening the soil to create a suitable environment for germination."
        ]);
        Step::create([
            'path' => 'assets/watering.png',
            'title' => 'Watering',
            'step_desc' => 'How much do they drink',
            'step_desc_first' => "Watering is a critical aspect of plant care. Determine the specific watering needs of your plants based on their type and environmental conditionsWater deeply and less frequently for most plants to encourage root growth. Ensure the soil is moist but not waterlogged. Use techniques like drip irrigation or watering at the base of plants to minimize evaporation and ensure water reaches the roots..",
            'step_desc_second' => "Water deeply and less frequently for most plants to encourage root growth. Ensure the soil is moist but not waterlogged. Use techniques like drip irrigation or watering at the base of plants to minimize evaporation and ensure water reaches the roots.Water deeply and less frequently for most plants to encourage root growth. Ensure the soil is moist but not waterlogged. Use techniques like drip irrigation or watering at the base of plants to minimize evaporation and ensure water reaches the roots."
        ]);
        Step::create([
            'path' => 'assets/fertilizing.jpeg',
            'title' => 'Fertilizing',
            'step_desc' => 'How much do they Eat',
            'step_desc_first' => "Fertilizing is essential to provide plants with necessary nutrients for healthy growth. Select a fertilizer suitable for your plant type and growth stage.Fertilizing is essential to provide plants with necessary nutrients for healthy growth. Select a fertilizer suitable for your plant type and growth stage.",
            'step_desc_second' => "Follow the recommended application rates and methods on the fertilizer packaging. Apply evenly around the base of the plants and water thoroughly afterward to help the nutrients reach the roots. Fertilizing is essential to provide plants with necessary nutrients for healthy growth. Select a fertilizer suitable for your plant type and growth stage."
        ]);
        Step::create([
            'path' => 'assets/plant-detail.png',
            'title' => 'Growing Plant',
            'step_desc' => 'Nurturing Plant Growth',
            'step_desc_first' => "Watching your plant grow is an exciting journey. Provide adequate care by regularly monitoring for pests, diseases, and environmental conditions. Prune when necessary to promote healthy growth. Monitor soil moisture, sunlight exposure, and consider providing support for taller plants. Enjoy the rewarding experience of nurturing a thriving plant!",
            'step_desc_second' => "Prune when necessary to promote healthy growth. Monitor soil moisture, sunlight exposure, and consider providing support for taller plants. Enjoy the rewarding experience of nurturing a thriving plant! Prune when necessary to promote healthy growth. Monitor soil moisture, sunlight exposure, and consider providing support for taller plants. Enjoy the rewarding experience of nurturing a thriving plant!"
        ]);
        Step::create([
            'path'=>'assets/plant-detail.png',

            'title'=>'Take care of Spinach',
            'step_desc'=>'Take care of their special needs!',
            'step_desc_first'=>"Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.",
            'step_desc_second'=>"To prepare the soil, begin by removing any weeds, rocks, or debris from the area. Loosen the soil with a garden fork or tiller to a depth of about 6-8 inches. This will improve soil aeration and drainage. Add organic matter like compost or well-rotted manure to the soil. Mix it in thoroughly to enhance soil fertility and improve moisture retention. Aim to achieve a slightly acidic to neutral pH level, typically around 6.5. This will create optimal growing conditions for your spinach. Finally, level the soil surface and create rows or beds for planting, leaving adequate space between rows to ensure good air circulation and easy harvesting.

            Spinach prefers cool, moist conditions, so be sure to maintain consistent soil moisture throughout the growing season. Applying a layer of mulch can help retain moisture and reduce weed competition. With well-prepared soil and proper care, you can enjoy a healthy and productive spinach crop in your garden. Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates."
        ]);
        Step::create([
            'path'=>'assets/full-plant-detail.png',

            'title'=>'Planting',
            'step_desc'=>'How would you like to plant them?',
            'step_desc_first'=>"Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.",
            'step_desc_second'=>"To prepare the soil, begin by removing any weeds, rocks, or debris from the area. Loosen the soil with a garden fork or tiller to a depth of about 6-8 inches. This will improve soil aeration and drainage. Add organic matter like compost or well-rotted manure to the soil. Mix it in thoroughly to enhance soil fertility and improve moisture retention. Aim to achieve a slightly acidic to neutral pH level, typically around 6.5. This will create optimal growing conditions for your spinach. Finally, level the soil surface and create rows or beds for planting, leaving adequate space between rows to ensure good air circulation and easy harvesting.

            Spinach prefers cool, moist conditions, so be sure to maintain consistent soil moisture throughout the growing season. Applying a layer of mulch can help retain moisture and reduce weed competition. With well-prepared soil and proper care, you can enjoy a healthy and productive spinach crop in your garden."
        ]);
        Step::create([
            'path'=>'assets/full-plant-detail.png',

            'title'=>'Harvesting',
            'step_desc'=>'When to harvest?',
            'step_desc_first'=>"Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.",
            'step_desc_second'=>"To prepare the soil, begin by removing any weeds, rocks, or debris from the area. Loosen the soil with a garden fork or tiller to a depth of about 6-8 inches. This will improve soil aeration and drainage. Add organic matter like compost or well-rotted manure to the soil. Mix it in thoroughly to enhance soil fertility and improve moisture retention. Aim to achieve a slightly acidic to neutral pH level, typically around 6.5. This will create optimal growing conditions for your spinach. Finally, level the soil surface and create rows or beds for planting, leaving adequate space between rows to ensure good air circulation and easy harvesting.

            Spinach prefers cool, moist conditions, so be sure to maintain consistent soil moisture throughout the growing season. Applying a layer of mulch can help retain moisture and reduce weed competition. With well-prepared soil and proper care, you can enjoy a healthy and productive spinach crop in your garden."
        ]);
        Step::create([
            'path'=>'assets/plant-detail.png',

            'title'=>'Picture the harvest results!',
            'step_desc'=>'Yum Yum!',
            'step_desc_first'=>"Preparing soil for spinach is crucial to ensure a successful and bountiful harvest. Spinach thrives in well-draining, nutrient-rich soil. Start by selecting a sunny to partially shaded location in your garden. Spinach prefers cooler temperatures, so choose a spot that gets morning sun and afternoon shade, especially in warmer climates.",
            'step_desc_second'=>"To prepare the soil, begin by removing any weeds, rocks, or debris from the area. Loosen the soil with a garden fork or tiller to a depth of about 6-8 inches. This will improve soil aeration and drainage. Add organic matter like compost or well-rotted manure to the soil. Mix it in thoroughly to enhance soil fertility and improve moisture retention. Aim to achieve a slightly acidic to neutral pH level, typically around 6.5. This will create optimal growing conditions for your spinach. Finally, level the soil surface and create rows or beds for planting, leaving adequate space between rows to ensure good air circulation and easy harvesting.

            Spinach prefers cool, moist conditions, so be sure to maintain consistent soil moisture throughout the growing season. Applying a layer of mulch can help retain moisture and reduce weed competition. With well-prepared soil and proper care, you can enjoy a healthy and productive spinach crop in your garden."
        ]);
    }
}
