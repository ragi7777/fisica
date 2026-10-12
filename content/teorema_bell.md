---
Title: Teorema de Bell: Realidad + Localidad
Description: Teorema de Bell: Realidad y Localidad en Física Cuántica
---

# 📋 %meta.description%

## Demostración del Teorema de Bell

La demostración del **Teorema de Bell** es uno de los hitos más profundos de la física moderna. Traducido en una fórmula matemática concreta, permite contrastar si la naturaleza obedece al realismo local o si la mecánica cuántica es correcta.

A continuación, se detalla paso a paso la formulación clásica del teorema utilizando la **desigualdad CHSH** (Clauser, Horne, Shimony y Holt), que es la versión más práctica y experimentalmente comprobable.

---

### 1. El montaje experimental ideal

Imagina un experimento en el que una fuente emite parejas de partículas entrelazadas (por ejemplo, fotones o electrones) que viajan en direcciones opuestas hacia dos observadores separados por una gran distancia: **Alice** y **Bob**.

* **Alice** puede elegir medir una propiedad de su partícula seleccionando un ángulo de ajuste $a$ o un ángulo alternativo $a'$.
* **Bob** puede elegir medir su partícula seleccionando un ángulo de ajuste $b$ o un ángulo alternativo $b'$.
* Cada medición arroja un resultado binario: **$+1$** o **$-1$** (por ejemplo, espín arriba o espín abajo).

Denominaremos:

* $A(a, \lambda) \in \{-1, +1\}$ al resultado obtenido por Alice con el ajuste $a$.
* $B(b, \lambda) \in \{-1, +1\}$ al resultado obtenido por Bob con el ajuste $b$.

---

### 2. Los supuestos del Realismo Local

El teorema de Bell evalúa matemáticamente qué pasaría si el universo cumpliera estrictamente con dos condiciones clásicas:

1. **Realismo:** Los resultados de las mediciones de Alice y Bob están determinados por propiedades intrínsecas preexistentes en las partículas, representadas por un conjunto de variables ocultas $\lambda$, distribuidas según una función de probabilidad $\rho(\lambda)$ (con $\int \rho(\lambda) d\lambda = 1$).
2. **Localidad:** La elección de Alice ($a$ o $a'$) no puede influir instantáneamente en el resultado de Bob, y viceversa. Por eso el resultado de Alice depende solo de $a$ y $\lambda$, y el de Bob solo de $b$ y $\lambda$.

---

### 3. La deducción matemática (Desigualdad CHSH)

Consideremos una identidad algebraica básica para cualquier conjunto de cuatro números $A, A', B, B'$ que solo puedan tomar los valores $+1$ o $-1$:

$$AB + A'B + AB' - A'B' = A(B + B') + A'(B - B')$$

Analicemos los posibles valores de los términos entre paréntesis sabiendo que $B$ y $B'$ valen $+1$ o $-1$:

* Si $B = B'$, entonces $(B + B') = \pm 2$ y $(B - B') = 0$. La expresión se reduce a $\pm 2A$, que al ser $A = \pm 1$, da como resultado **$\pm 2$**.
* Si $B \neq B'$, entonces $(B + B') = 0$ y $(B - B') = \pm 2$. La expresión se reduce a $\pm 2A'$, que al ser $A' = \pm 1$, da como resultado **$\pm 2$**.

Por lo tanto, para cualquier par individual de partículas caracterizado por una variable oculta $\lambda$, se cumple siempre que:

$$-2 \le A(a, \lambda)B(b, \lambda) + A(a', \lambda)B(b, \lambda) + A(a, \lambda)B(b', \lambda) - A(a', \lambda)B(b', \lambda) \le 2$$

#### El promedio estadístico

Si integramos esta desigualdad sobre todas las posibles variables ocultas $\lambda$ ponderadas por su probabilidad $\rho(\lambda)$, obtenemos la **Desigualdad CHSH**:

$$-2 \le E(a,b) + E(a',b) + E(a,b') - E(a',b') \le 2$$

Donde $E(a,b)$ representa el valor esperado (la correlación estadística) entre los resultados de Alice y Bob para los ángulos elegidos. **Cualquier teoría que cumpla el realismo local está obligada a dar un valor para esta combinación lineal (que llamaremos $S$) que esté entre $-2$ y $2$.**

---

### 4. La predicción y violación de la Mecánica Cuántica

La mecánica cuántica predice cómo se correlacionan las partículas entrelazadas (por ejemplo, en un estado singlete). Para el espín de dos electrones o la polarización de fotones, la correlación esperada entre dos mediciones con un ángulo relativo $\theta_{ab}$ entre ellas es:

$$E(a,b) = -\cos(\theta_{ab})$$

Ahora, supongamos que elegimos los siguientes ángulos para los ajustes de los instrumentos:

* $a = 0^\circ$
* $a' = 90^\circ$
* $b = 45^\circ$
* $b' = 135^\circ$

Calculamos los ángulos relativos y sus cosenos:

1. Ángulo entre $a$ y $b$ ($45^\circ$): $-\cos(45^\circ) = -\frac{1}{\sqrt{2}}$
2. Ángulo entre $a'$ y $b$ ($45^\circ$, ya que $\vert{}90^\circ - 45^\circ\vert{} = 45^\circ$): $-\cos(45^\circ) = -\frac{1}{\sqrt{2}}$
3. Ángulo entre $a$ y $b'$ ($135^\circ$): $-\cos(135^\circ) = \frac{1}{\sqrt{2}}$
4. Ángulo entre $a'$ y $b'$ ($45^\circ$, ya que $\vert{}90^\circ - 135^\circ\vert{} = 45^\circ$): $-\cos(45^\circ) = -\frac{1}{\sqrt{2}}$

Sustituimos estos valores en la suma $S$ de la desigualdad:

$$S = \left(-\frac{1}{\sqrt{2}}\right) + \left(-\frac{1}{\sqrt{2}}\right) + \left(\frac{1}{\sqrt{2}}\right) - \left(-\frac{1}{\sqrt{2}}\right)$$

Sumando los términos:

$$S = -\frac{4}{\sqrt{2}} = -2\sqrt{2}$$

Si tomamos el valor absoluto o evaluamos la combinación simétrica, obtenemos:

$$\vert{}S\vert{} = 2\sqrt{2} \approx 2.828$$

---

### Conclusión de la demostración

El resultado obtenido mediante la mecánica cuántica es **$2.828$**, lo cual **viola flagrantemente el límite clásico de $2$** impuesto por el realismo local ($2.828 > 2$).

Cuando los experimentos reales (iniciados por Alain Aspect en los años 80 y perfeccionados con las pruebas de cierre de rendijas en 2015) midieron este valor, comprobaron sistemáticamente que el resultado se sitúa en torno a $2.828$, confirmando las predicciones de la mecánica cuántica. Esto demuestra matemáticamente y de forma empírica que **la naturaleza no puede ser explicada simultáneamente por el realismo y por la localidad**.

### Consecuencias para nuestra comprensión del universo

Estos resultados obligan a la física a renunciar a la visión clásica: o bien las propiedades de las partículas no existen antes de ser medidas (se abandona el realismo), o bien existe algún tipo de conexión instantánea que desafía la separación espacial (se abandona la localidad estricta). La mayoría de los físicos acepta que la realidad cuántica es intrínsecamente probabilística y no local.

---

---

## "No Realismo o No Localidad" versus "No Realismo y No Localidad"

Algunos físicos dicen que la naturaleza **NO** es realista **NI** local, pero el Teorema de Bell no demuestra que se cumplan las dos negaciones a la vez.

La confusión surge porque en física cuántica la palabra "realista" se usa en un sentido muy técnico y estricto, diferente al uso cotidiano.

Para aclarar por qué algunos físicos afirman que "las dos cosas se cumplen simultáneamente" (es decir, que el universo es realista y no local, o que rechazan el realismo de otra manera), debemos distinguir entre el **realismo local** (la asunción combinada de Bell) y lo que significa abandonar o mantener cada concepto por separado.

---

### 1. El dilema: ¿Qué estamos rechazando?

El teorema de Bell demuestra que **no se pueden tener ambas cosas a la vez**. Por lo tanto, las opciones lógicas principales son:

* **Opción A (La postura mayoritaria/ortodoxa):** Renunciar al **realismo** (en el sentido de que las cosas tengan propiedades definidas antes de medirlas) y aceptar que la no-localidad existe o que la noción clásica de localidad espacial se rompe a nivel fundamental.
* **Opción B (Interpretaciones realistas pero no locales):** Mantener el **realismo** (afirmar que las partículas *sí* tienen propiedades reales y definidas en todo momento), pero aceptar que el precio a pagar es una **no-localidad radical**.

Cuando algunos físicos dicen que *"se cumplen simultáneamente"* (habitualmente refiriéndose a que el mundo es realista pero no local), están adoptando la **Opción B**.

---

### 2. ¿Cómo es un universo "realista y no local"? (La interpretación de De Broglie-Bohm)

El ejemplo más claro de esta postura es la **Mecánica Bohmiana** (o la teoría de la onda piloto), defendida en su día por Louis de Broglie y David Bohm, y sostenida hoy por una minoría respetada de físicos.

* **Es realista:** En esta teoría, los electrones y fotones **sí** tienen posiciones y trayectorias reales y bien definidas en todo momento, nos estén mirando o no. Las variables ocultas existen de verdad.
* **Es radicalmente no local:** Para explicar las correlaciones cuánticas sin renunciar al realismo, Bohm postuló la existencia de un "potencial cuántico" que actúa de manera instantánea a cualquier distancia en todo el universo.

En este marco, el mundo **es realista** (las cosas tienen propiedades fijas), pero **no es local** (existe una influencia instantánea que conecta el universo de un extremo a otro).

---

### 3. ¿Por qué la mayoría prefiere el bando opuesto?

Aunque la interpretación de Bohm salva el realismo, la inmensa mayoría de los físicos tiende a rechazar el realismo local **y** el realismo a secas (la Opción A) por varias razones:

1. **Incompatibilidad con la Relatividad Especial:** La no-localidad instantánea (acción a distancia) choca frontalmente con el espíritu de la teoría de la relatividad de Einstein, que prohíbe que viaja información útil o materia más rápido que la luz. Aunque en Bohm no se puede usar para *enviar* señales útiles (lo que evita violar la causalidad directamente), sigue pareciendo un artilugio incómodo para muchos.
2. **El éxito del enfoque operacional (Copenhague y afines):** La postura tradicional sugiere que preguntarse por "cómo es la partícula cuando no la miramos" es una pregunta metafísica fuera de la ciencia. La física debe describir las relaciones y las probabilidades de lo que medimos, no inventar realidades ocultas que no se pueden comprobar.

---

### Conclusión

* Cuando los físicos dicen que **"la cuántica no es realista ni local"**, se refieren a que hemos de abandonar el realismo clásico (el de las propiedades preexistentes) y aceptar que el universo está profundamente interconectado (no-localidad).
* Cuando otros físicos dicen que **"el mundo es realista pero no local"**, están eligiendo una interpretación específica (como la onda piloto) donde salvan que las cosas son reales, pero a cambio aceptan una no-localidad absoluta y fantasmal.

Ambos discursos están hablando del mismo teorema de Bell, pero difieren en qué parte del "castillo de naipes" clásico prefieren derribar.
