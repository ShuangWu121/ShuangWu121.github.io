---
date: 2020-02-8 
title: Plasma and TEE (Good Introduction)
---
### Contributions
* Give general security model for Plasma systems
* Build Plasma with TEE
* analyse the protocl in security model
* Implement on Ethereum and compare it with Plasma, propose extensions

### Interesting Points:
* all existing Plasma/commit-chain protocols require periodic commitments to the blockchain and logarithmic size messages to
withdraw coins from the system.
* Instead of saying "data sent to blockchain", one can say: Furthermore, asymptotically the on-chain
communication complexity of COMMITEE is O(1), while
for all the above mentioned protocols the communication
complexity grows logarithmically in the number of users.

### Questions
* How to monitor TEE to set up correctly 
* users still need to monitor the operator

### setences

1. These
protocols are orchestrated by a so-called operator that maintains the system and processes transactions between parties.

2. It is important to note, however, that the operator is not assumed to be trusted, and merely ensures an efficient and
well-functioning system.

3. The design of such mechanism poses non-trivial challenges
that existing Plasma systems attempt to solve by employing either heavy cryptographic machinery such as zero-knowledge
proofs or complex challenge-response protocols for resolving
disputes on-chain. Neither of these approaches is optimal for
the following two reasons: : (1) both approaches significantly
increase the communication complexity with the blockcahin
which increases costs and undermines the original purpose
of Plasma as an off-chain protocol; (2) the security analysis
of the resulting protocols becomes cumbersome, and hence
to-date there is no Plasma-like system that has been formally
proven secure. While there has been significant research efforts to address these problems [9], [8], [21], the community
has not yet come up with a suitable solution that can readily
be implemented.

4. In this section, we provide a brief overview of our solution and
discuss its main design challenges that had to be overcome