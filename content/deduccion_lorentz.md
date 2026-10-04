---
Title: Deducción de transformaciones de Lorenz
Description: Deducción de transformaciones de Lorenz
---

# 📋 %meta.description%

Este es uno de los resultados más hermosos y sorprendentes de la física teórica. A menudo se le conoce como la **deducción de las transformaciones de Lorentz a partir de axiomas de simetría** (o el teorema de Ignatowsky / Berzi-Gorini / Levy-Leblond, entre otros autores que lo formalizaron).

Lo fascinante de este teorema es que demuestra que **no necesitas postular la constancia de la velocidad de la luz ($c$)** como hizo Einstein originalmente. La existencia de una velocidad límite surge de forma natural puramente de la estructura del espacio y el tiempo.

Aquí tienes la explicación detallada y matemática de cómo se construye.

---

## 1. Los Principios Básicos (Axiomas)

Para iniciar, asumimos dos sistemas de referencia inerciales, $S$ y $S'$, donde $S'$ se mueve con velocidad $v$ respecto a $S$ a lo largo del eje $x$. Buscamos las funciones de transformación para las coordenadas $(x, t) \rightarrow (x', t')$.

Los postulados fundamentales son:

1. **Homogeneidad del espacio y el tiempo:** No hay puntos privilegiados en el universo. Las leyes de la física y las transformaciones son las mismas en cualquier lugar y momento.
2. **Isotropía del espacio:** No hay direcciones privilegiadas. Si invertimos los ejes espaciales, las ecuaciones deben mantener la misma forma.
3. **Principio de Relatividad (Galileano):** Las leyes de la física son las mismas en todos los sistemas inerciales. Si $S'$ se mueve a velocidad $v$ respecto a $S$, entonces $S$ se mueve a velocidad $-v$ respecto a $S'$.
4. **Estructura de Grupo:** Las transformaciones deben formar un grupo matemático (la combinación de dos transformaciones válidas debe ser otra transformación válida).

---

## 2. Paso a Paso Matemático

### Paso 1: Linealidad por Homogeneidad

La **homogeneidad** del espacio-tiempo exige que una línea recta en $S$ (un objeto moviéndose a velocidad constante) sea también una línea recta en $S'$. Si las transformaciones fueran cuadráticas o superiores, aparecerían aceleraciones ficticias dependiendo de dónde coloquemos el origen.

Por lo tanto, las transformaciones *tienen* que ser **lineales**:

$$x' = A(v)x + B(v)t$$

$$t' = C(v)x + D(v)t$$

Donde $A, B, C, D$ son funciones que solo dependen de la velocidad relativa $v$.

### Paso 2: El movimiento del origen

Consideremos el origen del sistema $S'$ ($x' = 0$). Desde el punto de vista de $S$, este punto se mueve con velocidad $v$, es decir, su posición es $x = vt$.

Sustituyendo esto en la primera ecuación:


$$0 = A(v)(vt) + B(v)t \implies B(v) = -v A(v)$$

Así, la primera ecuación se reduce a:


$$x' = A(v)(x - vt)$$

### Paso 3: Isotropía del espacio

La **isotropía** implica que si invertimos el sentido de los ejes espaciales ($x \rightarrow -x$ y $x' \rightarrow -x'$), la velocidad también invierte su signo ($v \rightarrow -v$).

Si aplicamos esta simetría de paridad a $x' = A(v)(x - vt)$, obtenemos:


$$-x' = A(-v)(-x - (-v)t) \implies -x' = -A(-v)(x - vt) \implies x' = A(-v)(x - vt)$$

Al comparar las dos expresiones, deducimos que:


$$A(v) = A(-v)$$


Es decir, $A(v)$ es una **función par** (no le importa si te mueves a la izquierda o a la derecha, solo la rapidez). Por simetría, se puede demostrar que $D(v)$ también es par, mientras que $C(v)$ resulta ser una función impar: $C(-v) = -C(v)$.

### Paso 4: El Principio de Relatividad (Inversión)

Si $S'$ se mueve a velocidad $v$ respecto a $S$, por el principio de relatividad, $S$ se mueve a velocidad $-v$ respecto a $S'$. Por lo tanto, la transformación inversa debe tener exactamente la misma forma pero cambiando $v$ por $-v$:

$$x = A(-v)(x' - (-v)t') = A(v)(x' + vt')$$

Ahora sustituimos las expresiones de $x'$ y $t'$ en esta ecuación inversa:


$$x = A(v) \big[ A(v)(x - vt) + vt' \big]$$

Despejando $t'$ de esta ecuación (tras un poco de álgebra), obtenemos la transformación para el tiempo:


$$t' = A(v) \left( t + \frac{1 - A(v)^2}{v^2 A(v)^2} x \right)$$

Si comparamos esto con nuestra ecuación lineal original $t' = C(v)x + D(v)t$, vemos que:


$$D(v) = A(v)$$

Y la constante que acompaña a la $x$ depende de un factor crucial. Definamos ese factor como:


$$K(v) = \frac{1 - A(v)^2}{v^2 A(v)^2}$$

De modo que la transformación del tiempo queda:


$$t' = A(v)(t - K(v)vx)$$

### Paso 5: La estructura de grupo y la constante universal $K$

Aquí viene la magia. Si aplicas una transformación de $S \rightarrow S'$ (con velocidad $v_1$) y luego otra de $S' \rightarrow S''$ (con velocidad $v_2$), el resultado neto $S \rightarrow S''$ debe ser una transformación de la misma forma con una velocidad resultante $v_3$.

Al imponer matemáticamente que la composición de estas matrices de transformación mantenga la misma estructura (propiedad de clausura de grupo), se llega a una restricción interna obligatoria: **$K(v)$ no puede depender de la velocidad**. Debe ser una constante universal absoluta, independiente del sistema de referencia.

$$K(v) = K = \text{constante}$$

Reescribiendo $A(v)$ en función de esta constante $K$, despejamos de la definición de $K(v)$:


$$A(v) = \frac{1}{\sqrt{1 + Kv^2}}$$

---

## 3. El veredicto de la constante $K$

La geometría del universo queda determinada por el signo de esta constante universal $K$. Hay exactamente tres posibilidades matemáticas:

### Caso 1: $K = 0$

Si $K = 0$, entonces $A(v) = 1$. Sustituyendo en nuestras ecuaciones:


$$x' = x - vt$$

$$t' = t$$


Estas son las **Transformaciones de Galileo** de la mecánica clásica. El tiempo es absoluto y el espacio es Newoniano.

### Caso 2: $K > 0$

Si $K$ es positivo, la geometría del espacio-tiempo se vuelve trágicamente inestable (permitiría rotaciones en el tiempo que violan la causalidad de forma absurda, permitiendo "viajar al pasado" con solo moverte rápido, cerrando bucles temporales en un espacio euclidiano de cuatro dimensiones). La física descarta este caso.

### Caso 3: $K < 0$

Si la constante es negativa, podemos definirla en términos de una velocidad límite positiva que llamaremos $c$, tal que $K = -\frac{1}{c^2}$.

Sustituyendo $K = -\frac{1}{c^2}$ en nuestras ecuaciones, el factor $A(v)$ se convierte en el famosísimo **factor de Lorentz ($\gamma$)**:


$$\gamma = \frac{1}{\sqrt{1 - \frac{v^2}{c^2}}}$$

Y las ecuaciones de transformación resultan en:


$$x' = \gamma (x - vt)$$

$$t' = \gamma \left(t - \frac{vx}{c^2}\right)$$

¡Las **Transformaciones de Lorentz**!

---

## Conclusión

El teorema demuestra algo asombroso: **la existencia de una velocidad límite universal ($c$) es una propiedad geométrica intrínseca del espacio-tiempo**, deducible puramente de asumir que el universo es uniforme, isótropo y que las leyes de la física son relativas.

El experimento (como el de Michelson-Morley o las ecuaciones de Maxwell) no creó la necesidad de una velocidad límite; simplemente nos dijo cuál era el valor real de esa constante universal $c$ (la velocidad de la luz) y nos confirmó que $K \neq 0$, demostrando que vivimos en un universo de Minkowski y no en uno de Galileo.

<hr style="border: 2px solid #2b6cb0; border-radius: 5px;">

# 📋 Nombre del Teorema

**No existe un nombre único y universalmente aceptado** en la literatura de la física para este resultado. En su lugar, la comunidad científica se refiere a este desarrollo de forma descriptiva o citando a los autores de los artículos históricos donde se redescubrió el concepto. Depende casi por completo del enfoque del autor del libro o del profesor.

Aquí te detallo cómo se le suele llamar y los nombres clave asociados:

---

## 1. Nombres Descriptivos (Los más comunes)

En la mayoría de los libros de relatividad moderna (como los de Wheeler, Taylor o Schutz), se le suele llamar simplemente:

* **Deducción axiomática de las transformaciones de Lorentz.**
* **Derivación de las transformaciones de Lorentz sin el segundo postulado** (el segundo postulado de Einstein es el de la constancia de la velocidad de la luz).
* **Estructura de grupo del espacio-tiempo.**

---

## 2. Los Nombres Propios de la Historia

Si tuviéramos que ponerle apellidos al teorema, habría que dárselos a los físicos que lo formularon y perfeccionaron a lo largo del siglo XX:

* **Woldemar von Ignatowsky (1910):** Fue el primero en demostrarlo. Solo 5 años después de que Einstein publicara la Relatividad Especial, Ignatowsky se dio cuenta de que el postulado de la luz no era necesario y que la homogeneidad, isotropía y el principio de relatividad bastaban para hallar las transformaciones. Por eso, en artículos de investigación avanzados se le conoce a veces como el **Enfoque de Ignatowsky**.
* **Philipp Frank y Hermann Rothe (1911):** Un año después, formalizaron rigurosamente el aparato matemático usando la **teoría de grupos de Lie**, demostrando que el espacio-tiempo solo admite el grupo de Galileo o el grupo de Lorentz.
* **Jean-Marc Lévy-Leblond (1976):** Es quizás el nombre moderno más asociado a este teorema. Su artículo *"One more derivation of the Lorentz transformation"* se convirtió en un clásico de la enseñanza de la física porque simplificó el álgebra y dejó claro que la constante $c$ es una propiedad del *espacio-tiempo*, no de la *luz*.

---

## 3. ¿Por qué no tiene un nombre único?

La razón principal es que **Einstein no lo hizo así**. La historia de la ciencia suele ponerle el nombre a las ecuaciones o teoremas según la primera gran formulación exitosa. Como Einstein dedujo las ecuaciones en 1905 usando la velocidad de la luz (apoyado en el electromagnetismo de Maxwell), esa fue la versión que se grabó en piedra en la cultura popular y científica.

El enfoque de Ignatowsky/Lévy-Leblond se considera una **re-derivación o un refinamiento conceptual posterior**. Es un triunfo de la física matemática que nos ayuda a entender *por qué* el universo es como es, pero llegó cuando las transformaciones ya llevaban el nombre de Hendrik Lorentz.
