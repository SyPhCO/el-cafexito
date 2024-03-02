<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\Persistence\Proxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'category' => [parent::class, 'category', null],
        "\0".parent::class."\0".'comments' => [parent::class, 'comments', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'gallery' => [parent::class, 'gallery', null],
        "\0".parent::class."\0".'gallery2' => [parent::class, 'gallery2', null],
        "\0".parent::class."\0".'gallery3' => [parent::class, 'gallery3', null],
        "\0".parent::class."\0".'gallery4' => [parent::class, 'gallery4', null],
        "\0".parent::class."\0".'gallery5' => [parent::class, 'gallery5', null],
        "\0".parent::class."\0".'gallery6' => [parent::class, 'gallery6', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'illustration' => [parent::class, 'illustration', null],
        "\0".parent::class."\0".'isBest' => [parent::class, 'isBest', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'price' => [parent::class, 'price', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        "\0".parent::class."\0".'subtitle' => [parent::class, 'subtitle', null],
        'category' => [parent::class, 'category', null],
        'comments' => [parent::class, 'comments', null],
        'description' => [parent::class, 'description', null],
        'gallery' => [parent::class, 'gallery', null],
        'gallery2' => [parent::class, 'gallery2', null],
        'gallery3' => [parent::class, 'gallery3', null],
        'gallery4' => [parent::class, 'gallery4', null],
        'gallery5' => [parent::class, 'gallery5', null],
        'gallery6' => [parent::class, 'gallery6', null],
        'id' => [parent::class, 'id', null],
        'illustration' => [parent::class, 'illustration', null],
        'isBest' => [parent::class, 'isBest', null],
        'name' => [parent::class, 'name', null],
        'price' => [parent::class, 'price', null],
        'slug' => [parent::class, 'slug', null],
        'subtitle' => [parent::class, 'subtitle', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}