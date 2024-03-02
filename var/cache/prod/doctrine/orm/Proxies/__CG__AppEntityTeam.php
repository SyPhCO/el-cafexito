<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Team extends \App\Entity\Team implements \Doctrine\Persistence\Proxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'gallery' => [parent::class, 'gallery', null],
        "\0".parent::class."\0".'gallery2' => [parent::class, 'gallery2', null],
        "\0".parent::class."\0".'gallery3' => [parent::class, 'gallery3', null],
        "\0".parent::class."\0".'gallery4' => [parent::class, 'gallery4', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'illustration' => [parent::class, 'illustration', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'role' => [parent::class, 'role', null],
        "\0".parent::class."\0".'slug' => [parent::class, 'slug', null],
        'description' => [parent::class, 'description', null],
        'gallery' => [parent::class, 'gallery', null],
        'gallery2' => [parent::class, 'gallery2', null],
        'gallery3' => [parent::class, 'gallery3', null],
        'gallery4' => [parent::class, 'gallery4', null],
        'id' => [parent::class, 'id', null],
        'illustration' => [parent::class, 'illustration', null],
        'name' => [parent::class, 'name', null],
        'role' => [parent::class, 'role', null],
        'slug' => [parent::class, 'slug', null],
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