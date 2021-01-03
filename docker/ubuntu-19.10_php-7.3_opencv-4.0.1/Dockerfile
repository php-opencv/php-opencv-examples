# doesnt't work !!! help wanted

FROM ubuntu:19.10

RUN apt update && apt install -y wget pkg-config cmake git checkinstall

RUN wget https://raw.githubusercontent.com/php-opencv/php-opencv-packages/master/opencv_4.0.1_amd64.deb && dpkg -i opencv_4.0.1_amd64.deb && rm opencv_4.0.1_amd64.deb

RUN export DEBIAN_FRONTEND=noninteractive && apt install -y php-cli php-dev

RUN git clone https://github.com/php-opencv/php-opencv.git

RUN cd php-opencv && phpize && ./configure --with-php-config=/usr/bin/php-config && make

#build deb package:

RUN cd php-opencv && checkinstall --default --type debian --install=no --pkgname php-opencv --pkgversion "7.3-4.0.1" --pkglicense "Apache 2.0" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install && make test

RUN echo "extension=opencv.so" > /etc/php/7.3/cli/conf.d/opencv.ini
