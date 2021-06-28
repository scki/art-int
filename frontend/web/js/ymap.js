ymaps.ready(init);
var map;

function init() {
    // var myGeocoder = ymaps.geocode('Качканар');
    var myGeocoder = ymaps.geocode('Ростовская область');
    var myClusterer = new ymaps.Clusterer({clusterDisableClickZoom: true});
    var myGeoObjects = [];

    myGeocoder.then(
        function (res) {
            var townCoords = res.geoObjects.get(0).geometry.getCoordinates();
            map = new ymaps.Map("map", {
                center: townCoords,
                controls: ['zoomControl'],
                zoom: 8
            });
            map.behaviors
                .disable(['scrollZoom']);


            $.each(address, function (index, value) {
                var address = value['address'];
                var town = value['town'];
                var fio = value['fio'];
                var text = value['text'];
                var street = ymaps.geocode(town + address);

                street.then(
                    function (res) {
                        var streetCoords = res.geoObjects.get(0).geometry.getCoordinates();

                        myGeoObjects = new ymaps.GeoObject({
                            geometry: {
                                type: "Point",
                                coordinates: streetCoords
                            },
                            properties: {
                                clusterCaption: fio,
                                balloonContentBody: '' +
                                    '<p><b>' + fio + '</b></p>' +
                                    '<hr>' +
                                    '<p><b>Адрес:</b> ' + town + ', ' + address + '</p>' +
                                    '<p><b>Заявка:</b> ' + text + '</p>' +
                                    '<hr>' +
                                    '<small>Приблизить: двойной щелчек левой кнопкой мыши</small><br>' +
                                    '<small>Отдалить: двойной щелчек правой кнопкой мыши</small>' +
                                    ''
                            }
                        });

                        myClusterer.add(myGeoObjects);

                    });
            });

            map.geoObjects.add(myClusterer);
        });
}