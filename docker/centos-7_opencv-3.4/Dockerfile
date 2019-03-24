FROM centos:7.5.1804

RUN yum install -y epel-release

RUN yum install -y wget git make cmake gcc gcc-c++ rpm-build rpmdevtools

RUN git clone https://github.com/opencv/opencv_contrib.git && git clone https://github.com/opencv/opencv.git

#COPY opencv_contrib /opencv_contrib
#COPY opencv /opencv

RUN cd opencv_contrib && git checkout 3.4 && cd ../opencv && git checkout 3.4

RUN mkdir build && cd build && cmake -D CMAKE_BUILD_TYPE=RELEASE -D CMAKE_INSTALL_PREFIX=/usr/local -D OPENCV_EXTRA_MODULES_PATH=../opencv_contrib/modules ../opencv && make -j4 && make install

RUN echo "/usr/local/lib64" > /etc/ld.so.conf.d/opencv.conf && ldconfig

#save /usr/local
#todo: rpm-build
