<?php

namespace App\DataFixtures;

use App\Entity\Day;
use App\Entity\Event;
use App\Entity\Lecture;
use App\Entity\LectureType;
use App\Entity\PhotoGallery;
use App\Entity\Room;
use App\Entity\Speaker;
use App\Entity\Sponsor;
use App\Entity\SponsorType;
use App\Entity\Ticket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // Day
        $day1 = new Day();
        $day1->setDate(new \DateTime('March 23, 2018 00:00'));
        $manager->persist($day1);

        $day2 = new Day();
        $day2->setDate(new \DateTime('March 24, 2018 00:00'));
        $manager->persist($day2);


        // Event
        $event = new Event();
        $event->setTitle('International PHP Conference');
        $event->setDescription('<p>The International PHP Conference is the world’s first PHP conference and stands since more than a decade for top-notch pragmatic expertise in PHP and web technologies. Internationally renowned experts from the PHP industry meet up with PHP users and developers from large and small companies.<p>
<ul class="bulleted-list">
 <li>Workshops, Sessions and Keynotes</li>
 <li>International Speakers and Experts</li>
 <li>Improve your Code  Grow your skills and become a better dev with the help of our speakers</li>
 <li>Networking  Get to know interesting people who share the same passion and enlarge your business network</li>
</ul>');
        $event->setDate('March 25-26, 2018 | Kiev');
        $manager->persist($event);

        // lectureType
        $lectureType1 = new LectureType();
        $lectureType1->setName('Openning');
        $manager->persist($lectureType1);

        $lectureType2 = new LectureType();
        $lectureType2->setName('Report of day');
        $manager->persist($lectureType2);

        $lectureType3 = new LectureType();
        $lectureType3->setName('Report ');
        $manager->persist($lectureType3);

        $lectureType4 = new LectureType();
        $lectureType4->setName('Lunch');
        $manager->persist($lectureType4);

        $lectureType5 = new LectureType();
        $lectureType5->setName('After party');
        $manager->persist($lectureType5);

        // photoGallery
        $photoGallery1 = new PhotoGallery();
        $photoGallery1->setImage('php.png');
        $manager->persist($photoGallery1);

        $photoGallery2 = new PhotoGallery();
        $photoGallery2->setImage('bussines.png');
        $manager->persist($photoGallery2);

        $photoGallery3 = new PhotoGallery();
        $photoGallery3->setImage('data.jpg');
        $manager->persist($photoGallery3);

        $photoGallery4 = new PhotoGallery();
        $photoGallery4->setImage('agro.jpg');
        $manager->persist($photoGallery4);

        // Room
        $room1 = new Room();
        $room1->setName('Auditorium A');
        $manager->persist($room1);

        $room2 = new Room();
        $room2->setName('Auditorium B');
        $manager->persist($room2);

        $room3 = new Room();
        $room3->setName('Auditorium C');
        $manager->persist($room3);

        $room4 = new Room();
        $room4->setName('Room 1');
        $manager->persist($room4);

        $room5 = new Room();
        $room5->setName('Room 2');
        $manager->persist($room5);

        // Speaker
        $speaker1 = new Speaker();
        $speaker1->setFullName('Misha');
        $speaker1->setCompany('KE');
        $speaker1->setPosition('economist');
        $speaker1->setPhoto('super.jpeg');
        $manager->persist($speaker1);

        $speaker2 = new Speaker();
        $speaker2->setFullName('Baily Lio');
        $speaker2->setCompany('Soft com 1');
        $speaker2->setPosition('Project Manager 1');
        $speaker2->setPhoto('run.jpeg');
        $manager->persist($speaker2);

        $speaker3 = new Speaker();
        $speaker3->setFullName('Lee Mun');
        $speaker3->setCompany('Web com 1');
        $speaker3->setPosition('Project Manager 3');
        $speaker3->setPhoto('box.jpeg');
        $manager->persist($speaker3);

        $speaker4 = new Speaker();
        $speaker4->setFullName('Henri Mong');
        $speaker4->setCompany('Web com 2');
        $speaker4->setPosition('Project Manager 2');
        $speaker4->setPhoto('news.jpeg');
        $manager->persist($speaker4);

        $speaker5 = new Speaker();
        $speaker5->setFullName('Samanta Doe');
        $speaker5->setCompany('Soft com 2');
        $speaker5->setPosition('Manager');
        $speaker5->setPhoto('index.jpeg');
        $manager->persist($speaker5);

        
        // sponsorType
        $sponsorType1 = new SponsorType();
        $sponsorType1->setName('bronz');
        $manager->persist($sponsorType1);

        $sponsorType2 = new SponsorType();
        $sponsorType2->setName('platinum');
        $manager->persist($sponsorType2);

        $sponsorType3 = new SponsorType();
        $sponsorType3->setName('gold');
        $manager->persist($sponsorType3);

        // Sponsor
        $sponsor1 = new Sponsor();
        $sponsor1->setName('ITEA');
        $sponsor1->setWebsite('itea.ua');
        $sponsor1->setLogo('logo-itea.svg');
        $sponsor1->setType($sponsorType1);
        $manager->persist($sponsor1);

        $sponsor2 = new Sponsor();
        $sponsor2->setName('Microsoft');
        $sponsor2->setWebsite('microsoft.com');
        $sponsor2->setLogo('microsoft_uk.png');
        $sponsor2->setType($sponsorType2);
        $manager->persist($sponsor2);

        $sponsor3 = new Sponsor();
        $sponsor3->setName('TemplateMonstor');
        $sponsor3->setWebsite('templatemonstor.com');
        $sponsor3->setLogo('template-monster_uk.png');
        $sponsor3->setType($sponsorType3);
        $manager->persist($sponsor3);     


        // Lecture
        $lecture1 = new Lecture();
        $lecture1->setName('PHP 7.2');
        $lecture1->setDay($day1);
        $lecture1->setTime(new \DateTime('March 23, 2018 12:00:00'));
        $lecture1->setDuration(100);
        $lecture1->setRoom($room1);
        $lecture1->setSpeaker($speaker1);
        $lecture1->setType($lectureType1);
        $manager->persist($lecture1);   

        $lecture2 = new Lecture();
        $lecture2->setName('Inroduction to PHP');
        $lecture2->setDay($day1);
        $lecture2->setTime(new \DateTime('March 23, 2018 10:00:00'));
        $lecture2->setDuration(90);
        $lecture2->setRoom($room2);
        $lecture2->setSpeaker($speaker2);
        $lecture2->setType($lectureType2);
        $manager->persist($lecture2);

        $lecture3 = new Lecture();
        $lecture3->setName('Principle of PHP');
        $lecture3->setDay($day1);
        $lecture3->setTime(new \DateTime('March 23, 2018 14:30:00'));
        $lecture3->setDuration(120);
        $lecture3->setRoom($room3);
        $lecture3->setSpeaker($speaker3);
        $lecture3->setType($lectureType3);
        $manager->persist($lecture3);

        $lecture4 = new Lecture();
        $lecture4->setName('Useful Tips for PHP');
        $lecture4->setDay($day2);
        $lecture4->setTime(new \DateTime('March 24, 2018 11:00:00'));
        $lecture4->setDuration(110);
        $lecture4->setRoom($room4);
        $lecture4->setSpeaker($speaker4);
        $lecture4->setType($lectureType1);
        $manager->persist($lecture4);

        $lecture5 = new Lecture();
        $lecture5->setName('Plugin Development');
        $lecture5->setDay($day2);
        $lecture5->setTime(new \DateTime('March 24, 2018 13:10:00'));
        $lecture5->setDuration(60);
        $lecture5->setRoom($room5);
        $lecture5->setSpeaker($speaker5);
        $lecture5->setType($lectureType2);
        $manager->persist($lecture5);

        $lecture6 = new Lecture();
        $lecture6->setName(' Wp Requirements');
        $lecture6->setDay($day2);
        $lecture6->setTime(new \DateTime('March 24, 2018 15:00:00'));
        $lecture6->setDuration(50);
        $lecture6->setRoom($room1);
        $lecture6->setSpeaker($speaker2);
        $lecture6->setType($lectureType3);
        $manager->persist($lecture6);


        // Ticket
        $ticket1 = new Ticket();
        $ticket1->setName('For one');
        $ticket1->setDescription('This ticket for one lecture');
        $ticket1->setCost(100);
        $manager->persist($ticket1);
        $ticket2 = new Ticket();
        $ticket2->setName('Double');
        $ticket2->setDescription('This ticket for 2 lectures');
        $ticket2->setCost(190);
        $manager->persist($ticket2);
        $ticket3 = new Ticket();
        $ticket3->setName('For day');
        $ticket3->setDescription('This ticket for one day');
        $ticket3->setCost(350);
        $manager->persist($ticket3);


        $manager->flush();
    }
}
