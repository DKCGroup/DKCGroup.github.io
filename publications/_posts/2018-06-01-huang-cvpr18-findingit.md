---
layout: publication
title: "Finding “It”: Weakly-Supervised Reference-Aware Visual Grounding in Instructional Video"
authors: "De-An Huang, Shyamal Buch, Lucio Dery, Animesh Garg, Li Fei-Fei, Juan Carlos Niebles"
pub_info_name: "IEEE Conference on Computer Vision & Pattern Recognition (CVPR)"
pub_info_date: June 2018
excerpt: text text text
images:
  thumb: huang-cvpr18-findingit.jpg
  main: huang-cvpr18-findingit.jpg
paper_link: "http://openaccess.thecvf.com/content_cvpr_2018/papers/Huang_Finding_It_Weakly-Supervised_CVPR_2018_paper.pdf"
video_link: "https://youtu.be/GBo4sFNzhtU?t=23m30s"
---
Grounding textual phrases in visual content with standalone image-sentence pairs is a challenging task. When we consider grounding in instructional videos, this problem becomes profoundly more complex: the latent temporal structure of instructional videos breaks independence assumptions and necessitates contextual understanding for resolving ambiguous visual-linguistic cues. Furthermore, dense annotations and video data scale mean supervised approaches are prohibitively costly. In this work, we propose to tackle this new task with a weakly-supervised framework for reference-aware visual grounding in instructional videos, where only the temporal alignment between the transcription and the video segment are available for supervision. We introduce the visually grounded action graph, a structured representation capturing the latent dependency between grounding and references in video. For optimization, we propose a new reference-aware multiple instance learning (RA-MIL) objective for weak supervision of grounding in videos. We evaluate our approach over unconstrained videos from YouCookII and RoboWatch, augmented with new reference-grounding test set annotations. We demonstrate that our jointly optimized, reference-aware approach simultaneously improves visual grounding, reference-resolution, and generalization to unseen instructional video categories. 
