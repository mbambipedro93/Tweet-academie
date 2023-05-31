DROP DATABASE IF EXISTS commonDatabase;
CREATE DATABASE commonDatabase;

USE commonDatabase;

DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS followers_followings;
DROP TABLE IF EXISTS tweet_image;
DROP TABLE IF EXISTS mention;
DROP TABLE IF EXISTS hashtags;
DROP TABLE IF EXISTS tweet;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS city;
DROP TABLE IF EXISTS tweet_hashtag;

CREATE TABLE city (
    id             INT              NOT NULL AUTO_INCREMENT,
    name           VARCHAR(255)     NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE user (
    id              INT             NOT NULL AUTO_INCREMENT,
    banner_url      VARCHAR(255),
    image_profile   VARCHAR(255),
    email           VARCHAR(255)    NOT NULL UNIQUE,
    lastname        VARCHAR(255)    NOT NULL,
    firstname       VARCHAR(255)    NOT NULL,
    username        VARCHAR(255)    NOT NULL,
    birth           DATETIME        NOT NULL,
    gender          VARCHAR(255)    NOT NULL,
    id_city         INT             NOT NULL,
    sign_in         DATETIME        DEFAULT CURRENT_TIMESTAMP,
    password        VARCHAR(255)    NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_city) REFERENCES city(id)
);

CREATE TABLE hashtags (
    id             INT              NOT NULL AUTO_INCREMENT,
    name           VARCHAR(255)     NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE followers_followings(
    id_follower      INT            NOT NULL,
    id_following     INT            NOT NULL,
    FOREIGN KEY (id_follower) REFERENCES user(id),
    FOREIGN KEY (id_following) REFERENCES user(id)
);

CREATE TABLE tweet(
    id              INT            NOT NULL AUTO_INCREMENT,
    id_user         INT            NOT NULL,
    text            VARCHAR(140)   NOT NULL,
    private         BOOL           NOT NULL,
    date_send       DATETIME       DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES user(id)
);

CREATE TABLE images(
    id              INT            NOT NULL AUTO_INCREMENT,
    url             VARCHAR(140)   NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tweet_image(
    id_image INT NOT NULL,
    id_tweet INT NOT NULL,
    FOREIGN KEY (id_image) REFERENCES images(id),
    FOREIGN KEY (id_tweet) REFERENCES tweet(id)
);

CREATE TABLE tweet_hashtag(
    id_tweet INT NOT NULL,
    id_hashtag INT NOT NULL,
    FOREIGN KEY (id_tweet) REFERENCES tweet(id),
    FOREIGN KEY (id_hashtag) REFERENCES hashtags(id)
);