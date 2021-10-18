---
date: 2020-02-08
title: Updateable Inner Product Argument PKB2020
---

### Interesting Points
1. Bulletproof The communication complexity is Oλ(log |C|)
3 and the verification
cost is (Oλ(|C|)) 
2. A lot of information in the introduction 

### Main Idea
(use $g$ instead of $r$)
  
1. Every time the verifier needs to compute a new folded generator as
$g'=g_{[:n']}^{-c}\circ g_{[n':]}^c$ . It has linear group operations
2. Use structured commen reference, transfer the linear operation to logrithem. so, if $g_{[n':]}=g_{[:n']}^{x_{v}}$, then $g'=(-c+x_{v}c)g_{[:n']}$, after recursive, verifier only needs to check at the end $\prod\limits_{i=1}^v(-c_i+x_ic_i)g_1$

### Question

Use pairing, strutured commen reference, so why not Groth?

### sentences

Maybe add in your paper:

We emphasize that the circuit-specific setup is done publicly: no secret is
involved in it. Anyone can take the universal parameters, and deterministically
compute the circuit-specific CRS. We present the definition of Updateable NonInteractive (Zero Knowledge) Arguments of Knowledge