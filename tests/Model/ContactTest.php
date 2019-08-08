<?php

namespace Phpackage\Autodns\Tests\Model;

use Exception;
use Phpackage\Autodns\Model\BasicUser;
use Phpackage\Autodns\Model\Contact;
use Phpackage\Autodns\Model\ContactReference;
use Phpackage\Autodns\Model\Enum\ContactProtectionConstants;
use Phpackage\Autodns\Model\Enum\ContactTypeConstants;
use Phpackage\Autodns\Tests\TestCase;

final class ContactTest extends TestCase
{
    public function testGetters()
    {
        $contact = new Contact();

        $this->assertNull($contact->getCreated());
        $this->assertNull($contact->getUpdated());
        $this->assertNull($contact->getId());
        $this->assertNull($contact->getCreated());
        $this->assertNull($contact->getUpdated());
        $this->assertNull($contact->getId());
        $this->assertNull($contact->getOwner());
        $this->assertNull($contact->getUpdater());
        $this->assertNull($contact->getAlias());
        $this->assertNull($contact->getType());
        $this->assertNull($contact->getOrganization());
        $this->assertNull($contact->getTitle());
        $this->assertNull($contact->getCity());
        $this->assertNull($contact->getCountry());
        $this->assertNull($contact->getState());
        $this->assertNull($contact->getEmail());
        $this->assertNull($contact->getProtection());
        $this->assertNull($contact->getSip());
        $this->assertNull($contact->getVerification());
        $this->assertNull($contact->getFname());
        $this->assertNull($contact->getLname());
        $this->assertIsArray($contact->getAddress());
        $this->assertNull($contact->getPcode());
        $this->assertNull($contact->getPhone());
        $this->assertNull($contact->getFax());
        $this->assertIsArray($contact->getNicRef());

        return $contact;
    }

    /**
     * @depends testGetters
     * @param Contact $contact
     * @throws Exception
     */
    public function testSetters(Contact $contact)
    {
        $created = $this->faker->dateTime;
        $contact->setCreated($created);
        $this->assertSame($created, $contact->getCreated());

        $updated = $this->faker->dateTime;
        $contact->setUpdated($updated);
        $this->assertSame($updated, $contact->getUpdated());

        $owner = new BasicUser();
        $contact->setOwner($owner);
        $this->assertSame($owner, $contact->getOwner());

        $updater = new BasicUser();
        $contact->setUpdater($updater);
        $this->assertSame($updater, $contact->getUpdater());

        $alias = $this->faker->word;
        $contact->setAlias($alias);
        $this->assertSame($alias, $contact->getAlias());

        $type = $this->faker->randomElement([
            ContactTypeConstants::PERSON,
            ContactTypeConstants::ORG,
            ContactTypeConstants::ROLE,
        ]);

        $contact->setType($type);
        $this->assertSame($type, $contact->getType());

        $organization = $this->faker->company;
        $contact->setOrganization($organization);
        $this->assertSame($organization, $contact->getOrganization());

        $title = $this->faker->title;
        $contact->setTitle($title);
        $this->assertSame($title, $contact->getTitle());

        $city = $this->faker->city;
        $contact->setCity($city);
        $this->assertSame($city, $contact->getCity());

        $country = $this->faker->countryCode;
        $contact->setCountry($country);
        $this->assertSame($country, $contact->getCountry());

        $state = $this->faker->state;
        $contact->setState($state);
        $this->assertSame($state, $contact->getState());

        $email = $this->faker->email;
        $contact->setEmail($email);
        $this->assertSame($email, $contact->getEmail());

        $protection = $this->faker->randomElement([
            ContactProtectionConstants::SHOW_ALL,
            ContactProtectionConstants::SHOW_NONE,
        ]);

        $contact->setProtection($protection);
        $this->assertSame($protection, $contact->getProtection());

        $uuid = $this->faker->uuid;
        $contact->setSip($uuid);
        $this->assertSame($uuid, $contact->getSip());

        $verification = $this->faker->word;
        $contact->setVerification($verification);
        $this->assertSame($verification, $contact->getVerification());

        $firstName = $this->faker->firstName;
        $contact->setFname($firstName);
        $this->assertSame($firstName, $contact->getFname());

        $lastName = $this->faker->lastName;
        $contact->setLname($lastName);
        $this->assertSame($lastName, $contact->getLname());

        $streetAddress = $this->faker->streetAddress;
        $contact->setAddress([$streetAddress]);
        $contact->addAddress($streetAddress);
        $this->assertIsArray($contact->getAddress());
        $this->assertCount(2, $contact->getAddress());
        $this->assertSame($streetAddress, $contact->getAddress()[0]);
        $this->assertSame($streetAddress, $contact->getAddress()[1]);

        $postcode = $this->faker->postcode;
        $contact->setPcode($postcode);
        $this->assertSame($postcode, $contact->getPcode());

        $phoneNumber = $this->faker->phoneNumber;
        $contact->setPhone($phoneNumber);
        $this->assertSame($phoneNumber, $contact->getPhone());

        $phoneNumber = $this->faker->phoneNumber;
        $contact->setFax($phoneNumber);
        $this->assertSame($phoneNumber, $contact->getFax());

        $contactReference = new ContactReference();
        $contact->setNicRef([$contactReference]);
        $contact->addNicRef($contactReference);
        $this->assertIsArray($contact->getNicRef());
        $this->assertCount(2, $contact->getNicRef());
        $this->assertSame($contactReference, $contact->getNicRef()[0]);
        $this->assertSame($contactReference, $contact->getNicRef()[1]);

        return $contact;
    }
}
