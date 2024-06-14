//******************* utils

/*const spinnerLoading = '<div class="spinner-border" role="status">\n' +
  '        <span class="visually-hidden">Loading...</span>\n' +
  '      </div>'*/

const spinnerLoading = 'loading...'

function loadContentById (id, content) {
    //console.log('loadContentById init')
    document.querySelectorAll('.tbody').forEach((tbl) => {
        let rowTableDataStart, rowTableDataOffset, rowTableDataCount, rowTableDataData
        //console.log(tbl.getAttribute('id'))

        let addContent = document.createElement('tr')
        let addContentStart = document.createElement('td')
        let addContentOffset = document.createElement('td')
        let addContentCount = document.createElement('td')
        let addContentData = document.createElement('td')

        if (tbl.getAttribute('id') === id) {
            if (content !== null) {
                /*rowTableDataStart = content.start
                rowTableDataOffset = content.offset
                rowTableDataCount = content.count
                rowTableDataData = content.data
                console.log(rowTableDataStart)*/

                addContentStart.innerHTML = content.start
                addContentOffset.innerHTML = content.offset
                addContentCount.innerHTML = content.count
                addContentData.innerHTML = JSON.stringify(content.data)

                addContent.appendChild(addContentStart)
                addContent.appendChild(addContentOffset)
                addContent.appendChild(addContentCount)
                addContent.appendChild(addContentData)

                tbl.appendChild(addContent)
            }
        }
    })
}

/*const processRequest = async (
    url, config = {}, callback = null,
) => {
    await axios(url, config).then(function (response) {
        if (callback) {
            callback(response)
        }
    }).catch(function (error) {
        console.log(error)
    }).then(function () {
        //console.log('request getEntities completed')
    })
}*/

const processRequest = (
    url, config = {}, callback = null,
) => {
    axios(url, config).then(function (response) {
        if (callback) {
            callback(response)
        }
    }).catch(function (error) {
        console.log(error)
    }).then(function () {
        //console.log('request getEntities completed')
    })
}


