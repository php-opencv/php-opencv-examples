FROM debian:10.7

RUN apt update && apt install -y wget pkg-config cmake git

RUN apt -y install lsb-release apt-transport-https ca-certificates && wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list

RUN apt update

RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.0.1_amd64.deb && dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb

RUN apt install -y php-dev php-cli

RUN php -v && apt info php-dev && apt info php-cli

RUN git clone https://github.com/php-opencv/php-opencv.git

RUN cd php-opencv && git checkout php7.4 && phpize && ./configure --with-php-config=/usr/bin/php-config && make && make install && make test

RUN echo "extension=opencv.so" > /etc/php/7.4/cli/conf.d/opencv.ini

#RUN strings /usr/lib/x86_64-linux-gnu/libstdc++.so.6 | grep GLIBCXX

#RUN git clone https://github.com/php-opencv/php-opencv-examples.git && cd php-opencv-examples && php classify_image_by_dnn_mobilenet.php

RUN apt list --installed | grep php

RUN apt list --installed | grep opencv
