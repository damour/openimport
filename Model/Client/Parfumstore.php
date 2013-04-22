<?php

namespace Client;

use Goutte\Client;

class Parfumstore {

    public function getWoomanBrands()
    {
        return [
            'http://parfumstore.ru/perfumery/woman/estee-lauder/' => 'Estee Lauder',
            'http://parfumstore.ru/perfumery/woman/kenzo/' => 'Kenzo',
            'http://parfumstore.ru/perfumery/woman/christian-dior/' => 'Christian Dior',
            'http://parfumstore.ru/perfumery/woman/acqua-di-parma/' => 'Acqua di Parma',
            'http://parfumstore.ru/perfumery/woman/agent-provocateur/' => 'Agent Provocateur',
            'http://parfumstore.ru/perfumery/woman/alexander-mcqueen/' => 'Alexander McQueen',
            'http://parfumstore.ru/perfumery/woman/alla-pugacheva/' => 'Alla Pugacheva',
            'http://parfumstore.ru/perfumery/woman/annasui-/' => 'Anna Sui',
            'http://parfumstore.ru/perfumery/woman/annayake/' => 'Annayake ',
            'http://parfumstore.ru/perfumery/woman/antonio-puig/' => 'Antonio Puig',
            'http://parfumstore.ru/perfumery/woman/baldinini/' => 'Baldinini',
            'http://parfumstore.ru/perfumery/woman/benetton/' => 'Benetton',
            'http://parfumstore.ru/perfumery/woman/boucheron/' => 'Boucheron',
            'http://parfumstore.ru/perfumery/woman/brooks-brothers/' => 'Brooks Brothers',
            'http://parfumstore.ru/perfumery/woman/bruno-banani/' => 'Bruno Banani',
            'http://parfumstore.ru/perfumery/woman/burberry/' => 'Burberry',
            'http://parfumstore.ru/perfumery/woman/bvlgari/' => 'Bvlgari',
            'http://parfumstore.ru/perfumery/woman/cacharel/' => 'Cacharel',
            'http://parfumstore.ru/perfumery/woman/carrera/' => 'Carrera',
            'http://parfumstore.ru/perfumery/woman/chevignon/' => 'Chevignon',
            'http://parfumstore.ru/perfumery/woman/christian-lacroix/' => 'Christian Lacroix',
            'http://parfumstore.ru/perfumery/woman/costume-national-/' => 'Costume National ',
            'http://parfumstore.ru/perfumery/woman/dkny/' => 'DKNY',
            'http://parfumstore.ru/perfumery/woman/davidoff/' => 'Davidoff',
            'http://parfumstore.ru/perfumery/woman/diesel/' => 'Diesel',
            'http://parfumstore.ru/perfumery/woman/dolly-girl/' => 'Dolly Girl',
            'http://parfumstore.ru/perfumery/woman/dsquared2/' => 'Dsquared2',
            'http://parfumstore.ru/perfumery/woman/elizabeth-arden/' => 'Elizabeth Arden',
            'http://parfumstore.ru/perfumery/woman/elizabeth-taylor/' => 'Elizabeth Taylor',
            'http://parfumstore.ru/perfumery/woman/ellen-tracy/' => 'Ellen Tracy',
            'http://parfumstore.ru/perfumery/woman/emanuel-ungaro/' => 'Emanuel Ungaro',
            'http://parfumstore.ru/perfumery/woman/escada/' => 'Escada',
            'http://parfumstore.ru/perfumery/woman/fendi/' => 'Fendi',
            'http://parfumstore.ru/perfumery/woman/franck-olivier/' => 'Franck Olivier',
            'http://parfumstore.ru/perfumery/woman/ghost/' => 'Ghost ',
            'http://parfumstore.ru/perfumery/woman/gian-marco-venturi--/' => 'Gian Marco Venturi',
            'http://parfumstore.ru/perfumery/woman/giorgio-armani/' => 'Giorgio Armani',
            'http://parfumstore.ru/perfumery/woman/girl/' => 'Girl',
            'http://parfumstore.ru/perfumery/woman/givenchy/' => 'Givenchy',
            'http://parfumstore.ru/perfumery/woman/gucci/' => 'Gucci',
            'http://parfumstore.ru/perfumery/woman/hermes/' => 'Hermes',
            'http://parfumstore.ru/perfumery/woman/hugo-boss/' => 'Hugo Boss',
            'http://parfumstore.ru/perfumery/woman/iceberg/' => 'Iceberg',
            'http://parfumstore.ru/perfumery/woman/issey-miyake/' => 'Issey Miyake',
            'http://parfumstore.ru/perfumery/woman/jacomo/' => 'Jacomo',
            'http://parfumstore.ru/perfumery/woman/jasper-conran/' => 'Jasper Conran',
            'http://parfumstore.ru/perfumery/woman/jennifer-lopez/' => 'Jennifer Lopez',
            'http://parfumstore.ru/perfumery/woman/jesus-del-pozo/' => 'Jesus del Pozo',
            'http://parfumstore.ru/perfumery/woman/jette-joop/' => 'Jette Joop',
            'http://parfumstore.ru/perfumery/woman/jil-sander/' => 'Jil Sander',
            'http://parfumstore.ru/perfumery/woman/jivago/' => 'Jivago',
            'http://parfumstore.ru/perfumery/woman/john-galliano/' => 'John Galliano',
            'http://parfumstore.ru/perfumery/woman/john-richmond/' => 'John Richmond',
            'http://parfumstore.ru/perfumery/woman/juicy-couture/' => 'Juicy Couture',
            'http://parfumstore.ru/perfumery/woman/just-cavalli/' => 'Just Cavalli',
            'http://parfumstore.ru/perfumery/woman/kenneth-cole/' => 'Kenneth Cole',
            'http://parfumstore.ru/perfumery/woman/l-artisan-parfumeur/' => 'LArtisan Parfumeur',
            'http://parfumstore.ru/perfumery/woman/la-perla/' => 'La Perla',
            'http://parfumstore.ru/perfumery/woman/la-prairie/' => 'La Prairie',
            'http://parfumstore.ru/perfumery/woman/lacoste/' => 'Lacoste',
            'http://parfumstore.ru/perfumery/woman/lalique/' => 'Lalique',
            'http://parfumstore.ru/perfumery/woman/lancome/' => 'Lancome',
            'http://parfumstore.ru/perfumery/woman/lanvin/' => 'Lanvin',
            'http://parfumstore.ru/perfumery/woman/laura-biagiotti/' => 'Laura Biagiotti',
            'http://parfumstore.ru/perfumery/woman/les-parfums-de-rosine/' => 'Les Parfums de Rosine',
            'http://parfumstore.ru/perfumery/woman/live-your-dream/' => 'Live your Dream',
            'http://parfumstore.ru/perfumery/woman/loewe/' => 'Loewe',
            'http://parfumstore.ru/perfumery/woman/lolita-lempicka/' => 'Lolita Lempicka',
            'http://parfumstore.ru/perfumery/woman/louis-feraud/' => 'Louis Feraud',
            'http://parfumstore.ru/perfumery/woman/mandarina-duck/' => 'Mandarina Duck',
            'http://parfumstore.ru/perfumery/woman/marc-jacobs/' => 'Marc Jacobs',
            'http://parfumstore.ru/perfumery/woman/mauboussin/' => 'Mauboussin',
            'http://parfumstore.ru/perfumery/woman/mexx/' => 'Mexx',
            'http://parfumstore.ru/perfumery/woman/morgan-de-toi/' => 'Morgan de Toi',
            'http://parfumstore.ru/perfumery/woman/moschino/' => 'Moschino',
            'http://parfumstore.ru/perfumery/woman/night-of-fancy/' => 'Night of Fancy',
            'http://parfumstore.ru/perfumery/woman/nina-ricci/' => 'Nina Ricci',
            'http://parfumstore.ru/perfumery/woman/paco-rabanne/' => 'Paco Rabanne',
            'http://parfumstore.ru/perfumery/woman/parfums-gres/' => 'Parfums Gres ',
            'http://parfumstore.ru/perfumery/woman/playboy/' => 'Playboy',
            'http://parfumstore.ru/perfumery/woman/prada/' => 'Prada',
            'http://parfumstore.ru/perfumery/woman/prescriptives/' => 'Prescriptives',
            'http://parfumstore.ru/perfumery/woman/princesse-marina-de-bourbon/' => 'Princesse Marina de Bourbon',
            'http://parfumstore.ru/perfumery/woman/puma/' => 'Puma',
            'http://parfumstore.ru/perfumery/woman/ralph-lauren/' => 'Ralph Lauren',
            'http://parfumstore.ru/perfumery/woman/ramon-molvizar/' => 'Ramon Molvizar',
            'http://parfumstore.ru/perfumery/woman/rance-1795/' => 'Rance 1795',
            'http://parfumstore.ru/perfumery/woman/roberto-cavalli/' => 'Roberto Cavalli',
            'http://parfumstore.ru/perfumery/woman/roberto-verino/' => 'Roberto Verino',
            'http://parfumstore.ru/perfumery/woman/stdupont/' => 'ST Dupont',
            'http://parfumstore.ru/perfumery/woman/salvadordali/' => 'Salvador Dali',
            'http://parfumstore.ru/perfumery/woman/salvatore-ferragamo/' => 'Salvatore Ferragamo',
            'http://parfumstore.ru/perfumery/woman/sarah-jessica-parker/' => 'Sarah Jessica Parker',
            'http://parfumstore.ru/perfumery/woman/scent/' => 'Scent',
            'http://parfumstore.ru/perfumery/woman/scent-sheer/' => 'Scent Sheer',
            'http://parfumstore.ru/perfumery/woman/secret-wish/' => 'Secret Wish',
            'http://parfumstore.ru/perfumery/woman/sergio-tacchini/' => 'Sergio Tacchini',
            'http://parfumstore.ru/perfumery/woman/shaik/' => 'Shaik',
            'http://parfumstore.ru/perfumery/woman/thierry-mugler/' => 'Thierry Mugler',
            'http://parfumstore.ru/perfumery/woman/valentino/' => 'Valentino',
            'http://parfumstore.ru/perfumery/woman/van-cleef-and-arpels/' => 'Van Cleef and Arpels',
            'http://parfumstore.ru/perfumery/woman/vera-wang-brand_and_line/' => 'Vera Wang',
            'http://parfumstore.ru/perfumery/woman/versace/' => 'Versace',
            'http://parfumstore.ru/perfumery/woman/yves-saint-laurent/' => 'Yves Saint Laurent',
        ];
    }

    public function getManBrands()
    {
       return [
           'http://parfumstore.ru/perfumery/man/hugo-boss/' => 'Hugo Boss',
           'http://parfumstore.ru/perfumery/man/playboy/' => 'Playboy',
           'http://parfumstore.ru/perfumery/man/giorgio-armani/' => 'Giorgio Armani',
           'http://parfumstore.ru/perfumery/man/alfred-dunhill/' => 'Alfred Dunhill',
           'http://parfumstore.ru/perfumery/man/alfred-sung/' => 'Alfred Sung',
           'http://parfumstore.ru/perfumery/man/annayake/' => 'Annayake ',
           'http://parfumstore.ru/perfumery/man/antonio-banderas/' => 'Antonio Banderas',
           'http://parfumstore.ru/perfumery/man/baldessarini/' => 'Baldessarini',
           'http://parfumstore.ru/perfumery/man/baldinini/' => 'Baldinini',
           'http://parfumstore.ru/perfumery/man/benetton/' => 'Benetton',
           'http://parfumstore.ru/perfumery/man/boucheron/' => 'Boucheron',
           'http://parfumstore.ru/perfumery/man/burberry/' => 'Burberry',
           'http://parfumstore.ru/perfumery/man/bvlgari/' => 'Bvlgari',
           'http://parfumstore.ru/perfumery/man/canali/' => 'Canali',
           'http://parfumstore.ru/perfumery/man/carolina-herrera/' => 'Carolina Herrera',
           'http://parfumstore.ru/perfumery/man/carrera/' => 'Carrera',
           'http://parfumstore.ru/perfumery/man/chevignon/' => 'Chevignon',
           'http://parfumstore.ru/perfumery/man/christian-dior/' => 'Christian Dior',
           'http://parfumstore.ru/perfumery/man/courvoisier/' => 'Courvoisier',
           'http://parfumstore.ru/perfumery/man/dkny/' => 'DKNY',
           'http://parfumstore.ru/perfumery/man/davidoff/' => 'Davidoff',
           'http://parfumstore.ru/perfumery/man/diesel/' => 'Diesel',
           'http://parfumstore.ru/perfumery/man/dsquared2/' => 'Dsquared2',
           'http://parfumstore.ru/perfumery/man/emanuel-ungaro/' => 'Emanuel Ungaro',
           'http://parfumstore.ru/perfumery/man/estee-lauder/' => 'Estee Lauder',
           'http://parfumstore.ru/perfumery/man/fendi/' => 'Fendi',
           'http://parfumstore.ru/perfumery/man/franck-olivier/' => 'Franck Olivier',
           'http://parfumstore.ru/perfumery/man/gmv-essence-for-men/' => 'GMV Essence for Men',
           'http://parfumstore.ru/perfumery/man/gian-marco-venturi--/' => 'Gian Marco Venturi',
           'http://parfumstore.ru/perfumery/man/giorgio-beverly-hills/' => 'Giorgio Beverly Hills',
           'http://parfumstore.ru/perfumery/man/givenchy/' => 'Givenchy',
           'http://parfumstore.ru/perfumery/man/gucci/' => 'Gucci',
           'http://parfumstore.ru/perfumery/man/hermes/' => 'Hermes',
           'http://parfumstore.ru/perfumery/man/iceberg/' => 'Iceberg',
           'http://parfumstore.ru/perfumery/man/issey-miyake/' => 'Issey Miyake',
           'http://parfumstore.ru/perfumery/man/jacomo/' => 'Jacomo',
           'http://parfumstore.ru/perfumery/man/jasper-conran/' => 'Jasper Conran',
           'http://parfumstore.ru/perfumery/man/jil-sander/' => 'Jil Sander',
           'http://parfumstore.ru/perfumery/man/john-richmond/' => 'John Richmond',
           'http://parfumstore.ru/perfumery/man/john-varvatos/' => 'John Varvatos',
           'http://parfumstore.ru/perfumery/man/juicy-couture/' => 'Juicy Couture',
           'http://parfumstore.ru/perfumery/man/just-cavalli/' => 'Just Cavalli',
           'http://parfumstore.ru/perfumery/man/karl-lagerfeld/' => 'Karl Lagerfeld',
           'http://parfumstore.ru/perfumery/man/kenneth-cole/' => 'Kenneth Cole',
           'http://parfumstore.ru/perfumery/man/kenzo/' => 'Kenzo',
           'http://parfumstore.ru/perfumery/man/l-artisan-parfumeur/' => 'LArtisan Parfumeur',
            'http://parfumstore.ru/perfumery/man/lacoste/' => 'Lacoste',
            'http://parfumstore.ru/perfumery/man/lalique/' => 'Lalique',
            'http://parfumstore.ru/perfumery/man/lancome/' => 'Lancome',
            'http://parfumstore.ru/perfumery/man/lanvin/' => 'Lanvin',
            'http://parfumstore.ru/perfumery/man/loewe/' => 'Loewe',
            'http://parfumstore.ru/perfumery/man/louis-feraud/' => 'Louis Feraud',
            'http://parfumstore.ru/perfumery/man/mandarina-duck/' => 'Mandarina Duck',
            'http://parfumstore.ru/perfumery/man/marc-jacobs/' => 'Marc Jacobs',
            'http://parfumstore.ru/perfumery/man/mexx/' => 'Mexx',
            'http://parfumstore.ru/perfumery/man/mont-blanc/' => 'Mont Blanc',
            'http://parfumstore.ru/perfumery/man/moschino/' => 'Moschino',
            'http://parfumstore.ru/perfumery/man/paco-rabanne/' => 'Paco Rabanne',
            'http://parfumstore.ru/perfumery/man/pal-zileri/' => 'Pal Zileri',
            'http://parfumstore.ru/perfumery/man/porsche-design/' => 'Porsche Design',
            'http://parfumstore.ru/perfumery/man/prada/' => 'Prada',
            'http://parfumstore.ru/perfumery/man/puma/' => 'Puma',
            'http://parfumstore.ru/perfumery/man/ralph-lauren/' => 'Ralph Lauren',
            'http://parfumstore.ru/perfumery/man/ramon-molvizar/' => 'Ramon Molvizar',
            'http://parfumstore.ru/perfumery/man/rance-1795/' => 'Rance 1795',
            'http://parfumstore.ru/perfumery/man/roberto-verino/' => 'Roberto Verino',
            'http://parfumstore.ru/perfumery/man/stdupont/' => 'ST Dupont',
            'http://parfumstore.ru/perfumery/man/salvadordali/' => 'Salvador Dali',
            'http://parfumstore.ru/perfumery/man/salvatore-ferragamo/' => 'Salvatore Ferragamo',
            'http://parfumstore.ru/perfumery/man/sergio-tacchini/' => 'Sergio Tacchini',
            'http://parfumstore.ru/perfumery/man/shaik/' => 'Shaik',
            'http://parfumstore.ru/perfumery/man/ted-lapidus/' => 'Ted Lapidus',
            'http://parfumstore.ru/perfumery/man/thierry-mugler/' => 'Thierry Mugler',
            'http://parfumstore.ru/perfumery/man/tommy-hilfiger/' => 'Tommy Hilfiger',
            'http://parfumstore.ru/perfumery/man/van-cleef-and-arpels/' => 'Van Cleef and Arpels',
            'http://parfumstore.ru/perfumery/man/versace/' => 'Versace',
            'http://parfumstore.ru/perfumery/man/yves-saint-laurent/' => 'Yves Saint Laurent',
            ];
    }

    public function getItems($brand_url)
    {
        $client = new Client();

        $crawler = $client->request('GET', $brand_url);

        $items = [];

        foreach ($crawler->filter('.products-items .thumb .prod_link') as $node)
            $items[] = 'http://parfumstore.ru' . $node->getAttribute('href');

        return $items;
    }

    public function parse_item($item_url)
    {
        $client = new Client();

        $client->followRedirects(true);

        $crawler = $client->request('GET', $item_url);

        $images = [];

        foreach ($crawler->filter('.photos a') as $node)
            $images[] = 'http://parfumstore.ru' . $node->getAttribute('href');

        $h1 = '';

        foreach ($crawler->filter('h1') as $domElement) {
            foreach($domElement->childNodes as $node) {
                $h1 .= $domElement->ownerDocument->saveHTML($node);
            }
        }

        $h1 = trim(preg_replace("/.*\n\t<br>\n\t/", '', $h1));

        $h1 = preg_replace("/\s[0-9]+МЛ/", "", $h1);

        $description = trim($crawler->filter('.product-main-info')->text());

        $price = $crawler->filter('.product-price')->text();
        $price = str_replace(" ", "", $price);
        $price = str_replace("р.", "", $price);
        $price = round($price / 4);

        $video = '';

        foreach ($crawler->filter('#t-video') as $domElement) {
            foreach($domElement->childNodes as $node) {
                $video .= $domElement->ownerDocument->saveHTML($node);
            }
        }

        $video = trim($video);

        if (!empty($video))
            $video = preg_replace("/data=\"(.*)\" style/", "data=\"$1?rel=0\" style", $video);

        if (preg_match('#http:\/\/www.youtube.com\/v\/\&amp\;hl\=en\&amp\;fs#', $video))
            $video = '';

        $nodeValues = $crawler->filter('.product-item-volume span')->each(function ($node, $i) {
            return $node->nodeValue;
        });

        $nodePrices = $crawler->filter('.product-item-price span')->each(function ($node, $i) {
            return $node->nodeValue;
        });

        $description = trim(preg_replace('#.*Композиция\n#s', '', $description));
        $description = trim(preg_replace('/развернуть.*/s', '', $description));

        $options = array_combine($nodeValues, $nodePrices);

        $item = [
            'name'        => $h1,
            'images'      => $images,
            'description' => $description,
            'price'       => $price,
            'video'       => $video,
        ];

        return $item;
    }

}