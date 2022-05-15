// console.log('start js')
let xhr = new XMLHttpRequest();
xhr.open('GET', '/subdomains.json');
xhr.responseType = 'json';
xhr.send();
xhr.addEventListener('load', function () {
    let domain = window.location.host.split('.').slice(-2).join('.');

    let citiesLetters = [];
    for (let subdomain in xhr.response) {
        let city = xhr.response[subdomain].city;
        let letter = city[0].toUpperCase();
        if (!citiesLetters[letter]) {
            citiesLetters[letter] = [];
        }
        citiesLetters[letter].push({
            city: xhr.response[subdomain].city,
            subdomain: subdomain,
        });
    }
    setTimeout(() => {
        let siteUrl = window.location.hostname;
        // console.log(siteUrl)
        let result =  /:\/\/([^\/]+)/.exec(window.location.href)[1].split('.')[0]
        let data = {"astrakhan":{"city":"Астрахань","inCity":"Астрахане","address":"ул. Богдана Хмельницкого ул, 36"},"akhtubinsk":{"city":"Ахтубинск","inCity":"Ахтубинске","address":"ул. Сталинградская, 17"},"volgograd":{"city":"Волгоград","inCity":"Волгограде","address":"ул. Чехова, 18"},"volzhskiy":{"city":"Волжский","inCity":"Волжском","address":"ул. Энгельса, 1"},"kamyshin":{"city":"Камышин","inCity":"Камышине","address":"пл. Павших Борцов, 5"},"mikhaylovka":{"city":"Михайловка","inCity":"Михайловке","address":"ул. Коммуны, 105"},"uryupinsk":{"city":"Урюпинск","inCity":"Урюпинске","address":"ул. Островского, 20"},"krasnodar":{"city":"Краснодар","inCity":"Краснодаре","address":"ул. Северная, 490"},"anapa":{"city":"Анапа","inCity":"Анапе","address":"ул. Крымская, 99"},"armavir":{"city":"Армавир","inCity":"Армавире","address":"ул. Кирова, 56"},"belorechensk":{"city":"Белореченск","inCity":"Белореченске","address":"ул. Ленина, 64"},"gelendzhik":{"city":"Геленджик","inCity":"Геленджике","address":"ул. Ленина, 1"},"yeysk":{"city":"Ейск","inCity":"Ейске","address":"ул. Свердлова, 73"},"kropotkin":{"city":"Кропоткин","inCity":"Кропоткине","address":"ул. Красная, 54"},"krymsk":{"city":"Крымск","inCity":"Крымске","address":"ул. Карла Либкнехта, 38"},"novorossiysk":{"city":"Новороссийск","inCity":"Новороссийске","address":"ул. Советов, 11"},"slavyansk-na-kubani":{"city":"Славянск-на-Кубани","inCity":"Славянске-на-Кубани","address":"ул. Красная, 7А"},"sochi":{"city":"Сочи","inCity":"Сочи","address":"ул. Советская, 40"},"timashevsk":{"city":"Тимашевск","inCity":"Тимашевске","address":"ул. Красная, 102"},"tikhoretsk":{"city":"Тихорецк","inCity":"Тихорецке","address":"ул. Меньшикова, 82"},"tuapse":{"city":"Туапсе","inCity":"Туапсе","address":"ул. Октябрьской Революции, 2А"},"maykop":{"city":"Майкоп","inCity":"Майкопе","address":"ул. Краснооктябрьская, 50"},"elista":{"city":"Элиста","inCity":"Элисте","address":"ул. А. Сусеева, 4"},"rostov":{"city":"Ростов-на-Дону","inCity":"Ростове-на-Дону","address":"ул. Еременко 89Б"},"azov":{"city":"Азов","inCity":"Азове","address":"ул. Московская, 19"},"belaya kalitva":{"city":"Белая Калитва","inCity":"Белой Калитве","address":"ул. Энгельса, 106"},"volgodonsk":{"city":"Волгодонск","inCity":"Волгодонске","address":"пр. Курчатова, 18"},"kamensk-shakhtinsky":{"city":"Каменск-Шахтинский","inCity":"Каменске-Шахтинском","address":"ул. Щаденко, 60"},"novocherkassk":{"city":"Новочеркасск","inCity":"Новочеркасске","address":"ул. Московская, 69"},"taganrog":{"city":"Таганрог","inCity":"Таганроге","address":"ул. Октябрьская, 31"},"shakhty":{"city":"Шахты","inCity":"Шахтах","address":"ул. Советская, 136"}}


        if (data[result] !== undefined){
            document.querySelector(`#${data[result].city}`).click()
        }
        else {
            document.querySelector(`#Сочи`).click()

        }
        // console.log(data['kirov'])



        // if (localStorage.getItem('mapCity')){
        //     const clickCity = localStorage.getItem('mapCity')
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // else {
        //     const clickCity = "Самара"
        //     localStorage.setItem('mapCity','Самара')
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // console.log(document.cookie)
        // //cookie
        // if (document.cookie){
        //     const clickCity = document.cookie
        //     console.log(`cookie is ${clickCity}`)
        //     document.querySelector(`#${clickCity}`).click()
        // }
        // else {
        //     const clickCity = "Самара"
        //     document.cookie = clickCity
        //     console.log(clickCity)
        //     document.querySelector(`#${clickCity}`).click()
        // }


    },2000)

    for (let letter of ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я']) {
        if (!citiesLetters.hasOwnProperty(letter)) continue;
        let node = document.getElementById('root' + letter);
        if (!node) continue;

        ReactDOM.render(
            (
            <ul  className="cities-ul hoverClass" aria-label="Close" itemScope="itemScope" itemType="http://schema.org/SiteNavigationElement">
            {citiesLetters[letter].map(el => {
                    return (
                        <li onClick={(e) => {
                    }} key={el.subdomain} className="cities-li">
                        <a href={window.location.protocol + '//' + el.subdomain + '.' + domain + window.location.pathname + window.location.search} className="cities-a" itemProp="url"> {el.city}</a>
                        </li>
                )
                })}
            </ul>
    ),
        node
    );
    }
});
console.log('finished')
