FROM ubuntu:17.10

RUN apt update && apt install -y wget pkg-config cmake git checkinstall

RUN echo 1

RUN git clone https://github.com/opencv/opencv_contrib.git && git clone https://github.com/opencv/opencv.git

RUN cd opencv_contrib && git checkout 3.4 && cd ../opencv && git checkout 3.4

RUN mkdir build && cd build && cmake -D CMAKE_BUILD_TYPE=RELEASE -D CMAKE_INSTALL_PREFIX=/usr/local -D OPENCV_EXTRA_MODULES_PATH=../opencv_contrib/modules ../opencv && make -j4 && make install

RUN ldconfig

#build deb package:

RUN cd build && checkinstall --default --type debian --install=no --pkgname opencv --pkgversion "3.4" --pkglicense "3-clause BSD License" --pakdir ~ --maintainer "php-opencv" --addso --autodoinst make install
