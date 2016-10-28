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

    [
      {
        "id": "1",
        "name": "First album with 5 images",
        "description": "test description",
        "photos": [
          "DSC_0249.jpg",
          "DSC_6857.jpg",
          "DSC_6824.jpg",
          "DSC_6857_th.jpg",
          "DSC_6590_th.jpg"
        ]
      },
      {
        "id": "2",
        "name": "Album Serg",
        "photos": [
          "DSC_2057m_th.jpg",
          "DSC_2057m_th.jpg",
          "DSC_6857.jpg",
          "DSC_4384.jpg",
          "DSC_0876.jpg",
          "DSC_6494.jpg",
          "DSC_4351_th.jpg",
          "DSC_0850.jpg",
          "DSC_4321.jpg",
          "DSC_0358.jpg"
        ]
      },
      {
        "id": "3",
        "name": "Album Angelika",
        "photos": [
          "DSC_2940_th.jpg",
          "DSC_0845_th.jpg",
          "DSC_0397_th.jpg",
          "DSC_0021.jpg",
          "DSC_4321_th.jpg",
          "DSC_2870_th.jpg",
          "DSC_0034_th.jpg",
          "DSC_2870.jpg",
          "DSC_0450.jpg",
          "DSC_0871_th.jpg"
        ]
      },
      {
        "id": "4",
        "name": "Album Liubov",
        "photos": [
          "DSC_4258.jpg",
          "DSC_6494_th.jpg",
          "DSC_2940_th.jpg",
          "DSC_0339_th.jpg",
          "DSC_8125_th.jpg",
          "DSC_0261.jpg",
          "DSC_0450_th.jpg",
          "DSC_4607.jpg",
          "DSC_2132.jpg",
          "DSC_0021_th.jpg"
        ]
      },
      {
        "id": "5",
        "name": "Album Pavel",
        "photos": [
          "DSC_0261_th.jpg",
          "DSC_6494.jpg",
          "DSC_0249.jpg",
          "DSC_6590_th.jpg",
          "DSC_4399.jpg",
          "DSC_0261.jpg",
          "DSC_4145.jpg",
          "DSC_0934_th.jpg",
          "DSC_0934_th.jpg",
          "DSC_0876_th.jpg"
        ]
      }
    ]
</p>