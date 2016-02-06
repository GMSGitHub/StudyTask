cmake_minimum_required(VERSION 3.3)

project(StudyTask)

set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -std=c++11")

set(SOURCE_FILES src/com/gmichaels/studytask/c++/main.cpp)

add_executable(StudyTask ${SOURCE_FILES})