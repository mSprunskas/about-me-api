<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Tests\Controller;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Msp\Bundle\ProfileBundle\Repository\ProfileRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Client;

class ProfileControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var UrlGeneratorInterface
     */
    private $router;

    public function setUp()
    {
        $this->client = static::createClient();

        $container = $this->client->getContainer();
        $this->router = $container->get('router');

        $container->set('msp_profile.repository.profile', $this->createMock(ProfileRepository::class));
    }

    /**
     * @param int $expected
     * @param string $identifier
     *
     * @dataProvider dataProviderForGetProfileTest
     */
    public function testGetProfile(int $expected, string $identifier)
    {
        $this->client->request(
            Request::METHOD_GET,
            $this->router->generate('msp_profile.get_profile', ['identifier' => $identifier])
        );
        $this->assertEquals($expected, $this->client->getResponse()->getStatusCode());
    }

    public function dataProviderForGetProfileTest(): array
    {
        return [
            'case default identifier' =>  [
                Response::HTTP_OK,
                'nickname',
            ],
            'case invalid identifier' =>  [
                Response::HTTP_BAD_REQUEST,
                'invalid-nickname',
            ],
        ];
    }
}