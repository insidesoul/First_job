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
        let data = {"novorossiysk":{"city":"Новороссийск","inCity":"Новороссийске","address":"ул. Советов, 11"},"krasnodar":{"city":"Краснодар","inCity":"Краснодаре","address":"ул. Северная, 490"},"stavropol":{"city":"Ставрополь","inCity":"Ставрополе","address":"ул. Доваторцев, 47Б"}}


        if (data[result] !== undefined){
            document.querySelector(`#${data[result].city}`).click()
        }
        else {
            document.querySelector(`#Ставрополь`).click()

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
