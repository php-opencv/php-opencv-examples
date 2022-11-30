FROM ubuntu:22.10

RUN apt update && apt install -y wget pkg-config cmake git checkinstall

RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.5.0_amd64.deb && dpkg -i opencv_4.5.0_amd64.deb && rm opencv_4.5.0_amd64.deb

RUN apt update && apt install -y software-properties-common

RUN export DEBIAN_FRONTEND=noninteractive && apt install -y php8.1 php8.1-dev

RUN git clone https://github.com/php-opencv/php-opencv.git

RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make

#build deb package:

RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "8.1-4.5.0" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install && make test

RUN echo "extension=opencv.so" > /etc/php/8.1/cli/conf.d/opencv.ini
