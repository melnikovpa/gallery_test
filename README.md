gallery
=======

A Symfony TEST project created on October 27, 2016, 6:23 pm.

I use:

1. FOS REST BUNDLE - for rest
2. Nelmio - for fixtures
3. JMS Serialize (friensoft)
4. KNPPaginator - for pagination


<p>API URL</p>

<i>Get gallery with pictures</i><br/>
<p>
    1. GET - http://<host>/app_dev.php/api/get-one-album/1<br/>
    2. Content-Type: application/json
</p>
<p>
    Exmaple answer:<br/>
    
    {
      "id": 1,
      "name": "First album with 5 images",
      "description": "test description",
      "images": [
        {
          "id": 1,
          "file_name": "DSC_0249.jpg"
        },
        {
          "id": 2,
          "file_name": "DSC_6857.jpg"
        },
        {
          "id": 3,
          "file_name": "DSC_6824.jpg"
        },
        {
          "id": 4,
          "file_name": "DSC_6857_th.jpg"
        },
        {
          "id": 5,
          "file_name": "DSC_6590_th.jpg"
        }
      ]
    }

</p>

<i>Get all galeries</i><br/>
<p>
    1. GET - http://<host>/app_dev.php/api/get-album-list<br/>
    2. Content-Type: application/json
</p>

<p>

</p>