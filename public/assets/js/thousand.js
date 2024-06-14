console.log('init thousands')

const btnGetRecords = document.querySelector('#get_records')

btnGetRecords.addEventListener('click', (e) => {
    let start = 0

    console.log('get_records clicked')

    let i = 0

    while (i < 13) {

        start = i * 1000

        getData(start).then(r => {
            console.log('ajax completed with key: ', start)
        })

        /*setTimeout(function () {
            getData(start).then(r => {
                console.log('ajax completed with key: ', start)
            })
        }, 2000)*/

        i++
    }
})

const getData = async (start) => {
    let url = `api/v1/thousand_operation?start=${start}`

    console.log(url)

    let contentId = `table_content`
    //loadContentById(contentId, spinnerLoading)

    processRequest(
        url,
        {
            method: 'get',
            /*data: {
                start: start
            },*/
            //responseType: 'text',
        },
        function (data) {
            //console.log(data.data)
            //loadContentById(contentId, spinnerLoading)

            if (data !== null) {
                loadContentById(contentId, data.data)
            }

        })
}


