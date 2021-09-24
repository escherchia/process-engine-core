<?php

namespace Escherchia\ProcessEngineCore\Model\Elements;

interface ElementInterface
{
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ACTIVE = 'active';
    const STATUS_DONE = 'done';

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     */
    public function updateStatus(string $status);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name);

    /**
     * @param ElementInterface $element
     */
    public function addSource(ElementInterface $element): void;

    /**
     * @param ElementInterface $element
     */
    public function addTarget(ElementInterface $element): void;

    /**
     * @param string $key
     */
    public function removeSource(string $key): void;

    /**
     * @param string $key
     */
    public function removeTarget(string $key): void;

    /**
     * @return array
     */
    public function getSources(): array;


    /**
     * @return array
     */
    public function getTargets(): array;
}
