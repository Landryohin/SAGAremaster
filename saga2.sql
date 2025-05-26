--
-- PostgreSQL database dump
--

-- Dumped from database version 15.4
-- Dumped by pg_dump version 15.4

-- Started on 2025-05-11 17:45:30

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 3469 (class 0 OID 16676)
-- Dependencies: 227
-- Data for Name: provenances; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.provenances (id, document_id, structure, numero, date_enregistrement) FROM stdin;
5	24	SGM	74	2023-03-21
6	25	SGM	74	2023-03-21
7	26	SGM	66	2018-01-01
11	29	SGM	47	2023-03-27
8	28	SGM	452	2018-01-01
9	28	CAB	88	2018-01-01
10	28	DGB	65	2018-01-01
14	30	SGM	31	2023-04-05
\.