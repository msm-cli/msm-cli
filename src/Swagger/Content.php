<?php


namespace MSM\Swagger;

/**
 * @OA\Schema(
 *     title="Content",
 *     description="Content"
 * )
 */
trait Content
{
    /**
     * @OA\Property(
     *      title="content",
     *      description="content",
     *      example="content"
     * )
     *
     * @var string
     */
    public $content;
}
