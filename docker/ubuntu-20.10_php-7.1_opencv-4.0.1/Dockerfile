FROM ubuntu:20.10

RUN apt update && apt install -y wget pkg-config cmake git checkinstall

RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.0.1_amd64.deb && dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb

RUN apt install -y software-properties-common && add-apt-repository ppa:ondrej/php && apt update && export DEBIAN_FRONTEND=noninteractive && apt install -y php7.1 php7.1-dev

RUN git clone https://github.com/php-opencv/php-opencv.git
RUN cd php-opencv && git checkout php7.2

RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make && make install

RUN echo "extension=opencv.so" > /etc/php/7.1/cli/conf.d/opencv.ini

#build deb package:

RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "7.1-4.0.1" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install
