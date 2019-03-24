FROM ubuntu:18.04

RUN apt update && export DEBIAN_FRONTEND=noninteractive && apt install -y php-cli wget pkg-config cmake git php-cli php-dev checkinstall

RUN echo 1

RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.0.1_amd64.deb && dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb
#COPY opencv_4.0.1_amd64.deb opencv_4.0.1_amd64.deb
#RUN dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb

RUN git clone https://github.com/php-opencv/php-opencv.git
#COPY php-opencv /php-opencv

#RUN ldconfig

RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make

#build deb package:

RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "7.2-4.0.1" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install && make test

RUN echo "extension=opencv.so" > /etc/php/7.2/cli/conf.d/opencv.ini
