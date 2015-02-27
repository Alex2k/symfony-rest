<?php

namespace Demo\RestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Demo\RestBundle\Entity\Author;

class LoadAuthorData implements FixtureInterface
{
    /**
    * Load data fixtures
    * 
    */
    public function load(ObjectManager $manager)
    {
        $tolstoy = new Author();
        $tolstoy->setName('Лев Николаевич Толстой');
        $tolstoy->setBirthday(new \DateTime('1828-09-09'));
        $tolstoy->setDescription('Лев Николаевич Толстой — один из наиболее широко известных русских
                                 писателей и мыслителей, почитаемый как один из величайших писателей 
                                 мира. Участник обороны Севастополя.');
        $tolstoy->setCdate('');
        $tolstoy->setUdate('');
        
        $dostoevskiy = new Author();
        $dostoevskiy->setName('Фёдор Михайлович Достоевский');
        $dostoevskiy->setBirthday(new \DateTime('1821-11-11'));
        $dostoevskiy->setDescription('Фёдор Михайлович Достоевский — великий русский писатель, мыслитель, 
                                философ и публицист. Достоевский является классиком русской литературы 
                                и одним из лучших романистов мирового значения.');
        $dostoevskiy->setCdate('');
        $dostoevskiy->setUdate('');
        
        $google = new Author();
        $google->setName('Николай Васильевич Гоголь');
        $google->setBirthday(new \DateTime('1809-04-01'));
        $google->setDescription('Николай Васильевич Гоголь — русский прозаик, драматург, поэт, критик,
                                публицист, признанный одним из классиков русской литературы. Происходил 
                                из старинного дворянского рода Гоголь-Яновских.');
        $google->setCdate('');
        $google->setUdate('');
        
        $tvardovskiy = new Author();
        $tvardovskiy->setName('Александр Трифонович Твардовский');
        $tvardovskiy->setBirthday(new \DateTime('1910-06-21'));
        $tvardovskiy->setDescription('Александр Трифонович Твардовский — советский писатель и поэт. Главный 
                                редактор журнала «Новый мир». Лауреат различных премий, орденоносец. 
                                Член ВКП с 1940 года. Подполковник.');
        $tvardovskiy->setCdate('');
        $tvardovskiy->setUdate('');
        
        $burroughs = new Author();
        $burroughs->setName('Эдгар Райс Берроуз');
        $burroughs->setBirthday(new \DateTime('1875-09-01'));
        $burroughs->setDescription('Эдгар Райс Берроуз — американский писатель эры pulp-журналов, получивший 
                                большую популярность благодаря серии книг о Тарзане. Оказал значительное 
                                влияние на развитие жанров научной фантастики и фэнтези в XX веке.');
        $burroughs->setCdate('');
        $burroughs->setUdate('');
        
        $manager->persist($tolstoy);
        $manager->persist($dostoevskiy);
        $manager->persist($google);
        $manager->persist($tvardovskiy);
        $manager->persist($burroughs);
        
        $manager->flush();
    }
}
