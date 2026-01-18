---
layout: publication
title: "RoboTurk: A Crowdsourcing Platform for Robotic Skill Learning through Imitation"
authors: "Ajay Mandlekar, Yuke Zhu, Animesh Garg, Jonathan Booher, Max Spero, Albert Tung, Julian Gao, John Emmons, Anchit Gupta, Emre Orbay, Silvio Savarese, Li Fei-Fei"
pub_info_name: "Conference on Robot Learning (CoRL)"
pub_info_date: October 2018
excerpt: text text text
images:
  thumb: mandlekar-roboturk-corl18.png
  main: mandlekar-roboturk-corl18.png
paper_link: "http://vision.stanford.edu/pdf/mandlekar2018corl.pdf"
webpage_link: "http://roboturk.stanford.edu"
code_link: "https://github.com/StanfordVL/robosuite"
---
Imitation Learning has empowered recent advances in learning robotic manipulation tasks by addressing shortcomings of Reinforcement Learning such as exploration and reward specification. However, research in this area has been limited to modest-sized datasets due to the difficulty of collecting large quantities of task demonstrations through existing mechanisms. This work introduces ROBOTURK to address this challenge. ROBOTURK is a crowdsourcing platform for high quality 6-DoF trajectory based teleoperation through the use of widely available mobile devices (e.g. iPhone). We evaluate ROBOTURK on three manipulation tasks of varying timescales (15-120s) and observe that our user interface is statistically similar to special purpose hardware such as virtual reality controllers in terms of task completion times. Furthermore, we observe that poor network conditions, such as low bandwidth and high delay links, do not substantially affect the remote users' ability to perform task demonstrations successfully on ROBOTURK. Lastly, we demonstrate the efficacy of ROBOTURK through the collection of a pilot dataset; using ROBOTURK, we collected 137.5 hours of manipulation data from remote workers, amounting to over 2200 successful task demonstrations in 22 hours of total system usage. We show that the data obtained through ROBOTURK enables policy learning on multi-step manipulation tasks with sparse rewards and that using larger quantities of demonstrations during policy learning provides benefits in terms of both learning consistency and final performance.