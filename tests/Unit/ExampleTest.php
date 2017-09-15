<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    public function testIsCollection()
    {
        $collection = collect();
        if(get_class($collection) === \Illuminate\Support\Collection::class)
        {
            return true;
        }
        throw new \Exception('error');
    }

    public function testCollectionSiteGTZero()
    {
        $collection = collect([1,2,3,4,5]);
        if($collection->isNotEmpty())
        {
            return true;
        }
        throw new \Exception('error');
    }

    public function testAllElementsIsInt()
    {
        $collection = collect([1,2,3,4,5]);
        $result = $collection->filter(function($item){
            return is_int($item);
        });
        if($result->count() === $collection->count())
        {
            return true;
        }
        throw new \Exception('error');
    }

    public function testMaxInCollection()
    {
        $collection = collect([1,2,3,4,5]);
        $max = $collection->max();
        if($collection->contains($max))
        {
            return true;
        }
        throw new \Exception('error');
    }

    public function testMinInCollection()
    {
        $collection = collect([1,2,3,4,5]);
        $min = $collection->min();
        if($collection->contains($min))
        {
           return true;
        }
        throw new \Exception('error');
    }
}
