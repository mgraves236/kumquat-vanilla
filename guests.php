<!DOCTYPE html>
<html lang="en">
<?php require_once 'php/meta.php'; ?>
<body>
<?php $name = 'guests';
require_once 'php/menu.php'; ?>
<main>
    <article class="guest">
        <img src="img/guests/metzler.png" alt="Prof Ralph Metzler's photo">
        <div>
            <h1 style="text-align: start">Prof Dr Ralf Metzler</h1>
            <h2>/ Complex Systems /</h2>
            <p>Ralf Metzler is a professor for Theoretical Physics at the University of Potsdam. After obtaining his
                doctoral
                degree from the University of Ulm, Ralf was postdoc at Tel Aviv University and MIT, and he previously
                held faculty
                positions at Technical University of Munich, University of Ottawa, and the Nordic Institute for
                Theoretical Physics.
                He was also a Finland Distinguished Professor at Tampere University of Technology. Ralf mainly works on
                non-equilibrium
                statistical physics and stochastic processes, with applications in biological and soft matter. Ralf
                currently is an
                Associate of the Higgs Centre for Theoretical Physics at the University of Edinburgh and an Alexander
                von Humboldt
                Honorary Polish Research Scholar.</p>
        </div>
    </article>
    <article class="guest">
        <img src="img/guests/polk.png" alt="Prof Anatoli Polkovnikov's photo">
        <div>
            <h1 style="text-align: start">Prof Anatoli Polkovnikov</h1>
            <h2>/ Quantum Computing /</h2>
            <p>Anatoli Polkovnikov is a Professor of Physcis at Boston University. Anatoli obtained his doctoral degree
                at Yale University in Theoretical Physics. Then he was a postdoc at Department of Physics of Harvard
                University. His research interests include many particle systems, especially driven away from
                equilibrium.
            </p>
        </div>
    </article>
    <article class="guest">
        <img src="img/guests/cincio.png" alt="PhD Lukasz Cincio's photo">
        <div>
            <h1 style="text-align: start">PhD Lukasz Cincio</h1>
            <h2>/ Quantum Computing /</h2>
            <p>Lukasz Cincio is a staff scientist at Los Alamos National Laboratory. He was a postdoc at Perimeter
                Institute for Theoretical Physics before joining LANL as a J.R. Oppenheimer Fellow in 2016. Lukasz
                specializes in algorithms for near-term quantum computers. He investigates possibilities of
                demonstrating quantum advantage despite detrimental effects of noise. He is considering hybrid
                quantum-classical algorithms for fast-forwarding quantum simulations and solving algebraic problems
                including matrix diagonalization and linear systems of equations. He is also developing machine learning
                approaches for finding noise-resistant quantum circuits as well as data-driven error mitigation
                techniques.
            </p>
        </div>
    </article>
</main>
<?php require_once "php/side-bar.php"; ?>
</body>
</html>
