---
Title: Demostración clásica del Teorema Spin Estadística
Description: Demostración clásica del Teorema Spin Estadística
---

# 📋 %meta.description%

El **Teorema Spin-Estadística** establece la conexión fundamental en Teoría Cuántica de Campos (QFT) entre el espín de una partícula y la estadística que obedece:

* **Espín entero** ($s = 0, 1, 2, \dots$): satisface la estadística de Bose-Einstein (sus campos de materia satisfacen relaciones de **conmutación** a distancias espaciales).
* **Espín semientero** ($s = 1/2, 3/2, \dots$): satisface la estadística de Fermi-Dirac (sus campos de materia satisfacen relaciones de **anticonmutación** a distancias espaciales).

---

**1. Axiomas y Postulados Fundamentales**

La demostración del teorema (formulada originalmente por Wolfgang Pauli y formalizada axiomáticamente por Wightman, Streater y Burgoyne) descansa sobre cuatro postulados esenciales:

1. **Invariancia de Poincaré:** Las leyes de la física y el estado de vacío $\vert{}0\rangle$ son invariantes bajo transformaciones del grupo de Poincaré continuo.
2. **Microcausalidad (Localidad):** Dos mediciones en puntos del espacio-tiempo separados por un intervalo tipo espacio, $(x - y)^2 < 0$ (tomando firma $+---$), no pueden conectarse causalmente. Los observables físicos deben conmutar:


$$[\mathcal{O}(x), \mathcal{O}(y)] = 0 \quad \text{para } (x - y)^2 < 0$$


3. **Positividad de la Energía:** El espectro del operador Hamiltoniano $H$ está acotado inferiormente ($H \geq 0$), con el vacío $\vert{}0\rangle$ como estado de mínima energía ($H\vert{}0\rangle = 0$).
4. **Norma Positiva del Espacio de Hilbert:** La norma de cualquier estado físico es estrictamente no negativa ($\langle \psi \vert{} \psi \rangle \geq 0$).

---

**2. Demostración para Espín Entero ($s=0$): Campo Escalar Real**

Consideremos la expansión en modos de Fourier de un campo escalar libre $\phi(x)$:


$$\phi(x) = \int \frac{d^3p}{(2\pi)^3 \sqrt{2E_p}} \left( a_p e^{-ip \cdot x} + a_p^\dagger e^{ip \cdot x} \right)$$

donde $p \cdot x = p^0 x^0 - \mathbf{p} \cdot \mathbf{x}$ y $E_p = \sqrt{\mathbf{p}^2 + m^2}$.

### Opción A: Aplicar Conmutadores (Bose-Einstein)

Si cuantizamos imponiendo relaciones de conmutación $[a_p, a_q^\dagger] = (2\pi)^3 \delta^3(\mathbf{p} - \mathbf{q})$, el conmutador de los campos en el espacio-tiempo resulta:


$$[\phi(x), \phi(y)] = i \Delta(x - y)$$

donde $\Delta(x - y)$ es la función de Pauli-Jordan:


$$\Delta(x - y) = -i \int \frac{d^3p}{(2\pi)^3 2E_p} \left( e^{-ip \cdot (x-y)} - e^{ip \cdot (x-y)} \right)$$

* Para puntos a tiempo igual ($x^0 = y^0$), al realizar un cambio de variable $\mathbf{p} \to -\mathbf{p}$ en el segundo término de la integral, ambos términos se cancelan exactamente: $\Delta(\mathbf{x} - \mathbf{y}, 0) = 0$.
* Dado que $(x - y)^2 < 0$ siempre puede llevarse mediante una transformación de Lorentz ortócrona a un marco donde $x^0 = y^0$, por invariancia de Lorentz tenemos:


$$[\phi(x), \phi(y)] = 0 \quad \text{para todo } (x - y)^2 < 0$$



**Conclusión:** Se respeta la microcausalidad.

### Opción B: Forzar Anticonmutadores (Fermi-Dirac)

Si intentamos cuantizar el campo escalar imponiendo relaciones de anticonmutación $\{a_p, a_q^\dagger\} = (2\pi)^3 \delta^3(\mathbf{p} - \mathbf{q})$, el anticonmutador de los campos es:


$$\{\phi(x), \phi(y)\} = \Delta_1(x - y) = \int \frac{d^3p}{(2\pi)^3 2E_p} \left( e^{-ip \cdot (x-y)} + e^{ip \cdot (x-y)} \right)$$

Evaluando a tiempo igual ($x^0 = y^0$):


$$\Delta_1(\mathbf{x} - \mathbf{y}, 0) = 2 \int \frac{d^3p}{(2\pi)^3 2E_p} \cos(\mathbf{p} \cdot (\mathbf{x} - \mathbf{y})) \neq 0$$

La función $\Delta_1(x-y)$ **no se anula** para separaciones tipo espacio. Si el campo fuera fermiónico, observables como el tensor de energía-impulso $T^{\mu\nu}(x)$ no conmutarían a distancias espaciales, violando el principio de microcausalidad o la norma positiva del espacio de Hilbert.

---

**3. Demostración para Espín Semientero ($s=1/2$): Campo de Dirac**

La expansión del campo de Dirac $\psi(x)$ es:

<div>
$$\psi(x) = \int \frac{d^3p}{(2\pi)^3 \sqrt{2E_p}} \sum_{s=1,2} \left( b_p^s u^s(p) e^{-ip \cdot x} + d_p^{s\dagger} v^s(p) e^{ip \cdot x} \right)$$
</div>

donde $b_p^s$ destruye partículas y $d_p^{s\dagger}$ crea antipartículas.

### Opción A: Imponer Conmutadores

Si asumimos de forma errónea relaciones de conmutación $[b_p^s, b_q^{r\dagger}] = (2\pi)^3 \delta^{sr} \delta^3(\mathbf{p}-\mathbf{q})$ y $[d_p^s, d_q^{r\dagger}] = (2\pi)^3 \delta^{sr} \delta^3(\mathbf{p}-\mathbf{q})$, evaluamos el Hamiltoniano $H = \int d^3x :T^{00}:$

<div>
$$H = \int \frac{d^3p}{(2\pi)^3} E_p \sum_{s=1,2} \left( b_p^{s\dagger} b_p^s - d_p^s d_p^{s\dagger} \right)$$
</div>

Al reordenar el operador de las antipartículas usando conmutadores ($d_p^s d_p^{s\dagger} = d_p^{s\dagger} d_p^s + \text{cte}$):

<div>
$$H = \int \frac{d^3p}{(2\pi)^3} E_p \sum_{s=1,2} \left( b_p^{s\dagger} b_p^s - d_p^{s\dagger} d_p^s \right)$$
</div>

El operador de número de antipartículas aparece con signo **negativo**. Esto destruye el postulado de positividad de la energía: se podrían crear infinitas antipartículas extrayendo cantidad ilimitada de energía, lo que implica que el sistema carecería de un estado fundamental estable.

### Opción B: Aplicar Anticonmutadores

Imponiendo relaciones de anticonmutación $\{d_p^s, d_q^{r\dagger}\} = (2\pi)^3 \delta^{sr} \delta^3(\mathbf{p}-\mathbf{q})$:

<div>
$$d_p^s d_p^{s\dagger} = -d_p^{s\dagger} d_p^s + \{d_p^s, d_p^{s\dagger}\}$$
</div>

Sustituyendo en el Hamiltoniano:

<div>
$$H = \int \frac{d^3p}{(2\pi)^3} E_p \sum_{s=1,2} \left( b_p^{s\dagger} b_p^s + d_p^{s\dagger} d_p^s \right)$$
</div>

La energía resulta **estrictamente positiva** ($H \geq 0$). Asimismo, el anticonmutador de los campos a separaciones tipo espacio es:

<div>
$$\{\psi_\alpha(x), \bar{\psi}_\beta(y)\} = (i \gamma^\mu \partial_\mu + m)_{\alpha\beta} i \Delta(x - y) = 0 \quad \text{para } (x - y)^2 < 0$$
</div>

Dado que las observables físicas (como la corriente electromagnética $j^\mu = \bar{\psi}\gamma^\mu\psi$) contienen un número par de campos de Dirac, la anticonmutación de $\psi$ garantiza la conmutación de los observables observables $j^\mu(x)$:


$$[j^\mu(x), j^\nu(y)] = 0 \quad \text{para } (x - y)^2 < 0$$

---

**4. Demostración General Topológica y del Grupo de Lorentz**

En la teoría de representaciones del grupo $SL(2, \mathbb{C})$ (el recubrimiento universal del grupo de Lorentz), el teorema se demuestra analizando la rotación en $2\pi$:

1. **Transformación de Rotación:** Una rotación de $2\pi$ aplicada a un campo con espín $s$ produce un factor de fase:


$$R(2\pi) \phi(x) = e^{i 2\pi s} \phi(x) = (-1)^{2s} \phi(x)$$


2. **Intercambio de Partículas:** En tres o más dimensiones espaciales, el intercambio de dos partículas idénticas mediante una trayectoria continua es equivalente a una rotación de $2\pi$ sobre el sistema.
3. **Invariancia CPT:** Mediante la continuación analítica de las funciones de Wightman al espacio Euclídeo (puntos de Schwinger), la simetría CPT impone de manera rigurosa que:


$$\phi_A(x)\phi_B(y) = (-1)^{2s} \phi_B(y)\phi_A(x) \quad \text{para } (x - y)^2 < 0$$

Si $s$ es entero, $(-1)^{2s} = +1$ (conmutación / Bose-Einstein). Si $s$ es semientero, $(-1)^{2s} = -1$ (anticonmutación / Fermi-Dirac).
