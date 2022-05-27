# README
### Development environment
#### PIP version 22.1.1
#### Python version 3.7.7
#### Package:
  #### dotenv
  ```bash
  pip install python-dotenv
  ```
  #### bugsnag
  ```bash
  pip install bugsnag
  ```
#### Run bot crawl data
```bash
python3 filename.py 
```
### Directory structure
config
  - .env
lib
  - crawler
    - master
      - goonet.py
    - detail
      - asnet.py
      - iauc.py
      - ...
    - one_price
      - asnet_oneprice.py
      - tc_web_oneprice.py
    - past
      - asnet.py
      - ...
    - send_data
      - keys
        - server.crt
        - server.key
      - client.py
    - dbmanager.py
    - utils.py
db
  - database.db

config
    *env
lib
  crawler:
  　 master
  　　 goonet.py
  　 detail
  　　 asnet.py
  　　 iauc.py
      ...
     one_price
  　　 asnet_oneprice.py
  　　 tc_web_oneprice.py
  　past
  　　 asnet.py
  　　 ...
    send_data
  　　 keys
  　　 client.py
   dbmanager.py
   utils.py
db
  database.db

### Notes on maintenance
Sometimes, the structure of sites crawling data will change, then it is necessary to correct the code