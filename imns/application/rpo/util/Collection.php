<?php
/**
 * Licenciado sobre os termos da CC-GNU GPL versão 2.0 ou posterior.
 *
 * A GNU General Public License é uma licença de Software Livre ("Free Software").
 * Assim como qualquer licença de Software Livre, ela concede a Você o exercício
 * livre dos quatro seguintes direitos:
 *
 * 1. O direito de executar o programa, para qualquer propósito.
 * 2. O direito de estudar como o programa funciona e adptá-lo para suas necessidades.
 * 3. O direito de redistribuir cópias, permitindo assim que você ajude outras pessoas.
 * 4. O direito de aperfeiçoar o programa, e distribuir seus aperfeiçoamentos para o público,
 *    beneficiando assim toda a comunidade.
 *
 * Você terá os direitos acima especificados contanto que Você cumpra com os requisitos expressos
 * nesta Licença.
 *
 * Os principais requisitos são:
 *
 * Você deve publicar de forma ostensiva e adequada, em cada cópia, um aviso de direitos autorais
 * (ou "copyright") e uma notificação sobre a exoneração de garantia. Além disso, Você deve manter
 * intactas todas as informações, avisos e notificações referentes à Licença e à ausência de qualquer
 * garantia. Você deve também fornecer a qualquer outra pessoa que receba este Programa uma cópia
 * desta Licença em conjunto com o Programa. Qualquer tradução da GNU General Public License deverá
 * estar acompanhada da GNU General Public License (original em lnglês).
 *
 * Se Você alterar ou transformar a obra, ou desenvolver outra obra baseada nela, Você poderá distribuir
 * o trabalho resultante desde que sob uma licença idêntica a esta. Qualquer tradução da GNU General
 * Public License deverá estar acompanhada da GNU General Public License (original em lnglês).
 *
 * Se Você copiar ou distribuir a obra, você deve incluir junto com ela o seu código-fonte correspondente
 * completo, passível de leitura pela máquina, ou incluir uma oferta por escrito para fornecer o código-fonte,
 * válida por pelo menos 3 anos.
 *
 * COMO O PROGRAMA É LICENCIADO SEM CUSTO, NÃO HÁ NENHUMA GARANTIA PARA O PROGRAMA, NO LIMITE PERMITIDO PELA LEI
 * APLICÁVEL. EXCETO QUANDO DE OUTRA FORMA ESTABELECIDO POR ESCRITO, OS TITULARES DOS DIREITOS AUTORAIS E/OU OUTRAS
 * PARTES, FORNECEM O PROGRAMA "NO ESTADO EM QUE SE ENCONTRA", SEM NENHUMA GARANTIA DE QUALQUER TIPO, TANTO EXPRESSA
 * COMO IMPLÍCITA, INCLUINDO, DENTRE OUTRAS, AS GARANTIAS IMPLÍCITAS DE COMERCIABILIDADE E ADEQUAÇÃO A UMA FINALIDADE
 * ESPECÍFICA. O RISCO INTEGRAL QUANTO À QUALIDADE E DESEMPENHO DO PROGRAMA É ASSUMIDO POR VOCÊ. CASO O PROGRAMA
 * CONTENHA DEFEITOS, VOCÊ ARCARÁ COM OS CUSTOS DE TODOS OS SERVIÇOS, REPAROS OU CORREÇÕES NECESSÁRIAS.
 *
 * EM NENHUMA CIRCUNSTÂNCIA, A MENOS QUE EXIGIDO PELA LEI APLICÁVEL OU ACORDADO POR ESCRITO, QUALQUER TITULAR DE
 * DIREITOS AUTORAIS OU QUALQUER OUTRA PARTE QUE POSSA MODIFICAR E/OU REDISTRIBUIR O PROGRAMA, CONFORME PERMITIDO
 * ACIMA, SERÁ RESPONSÁVEL PARA COM VOCÊ POR DANOS, INCLUINDO ENTRE OUTROS, QUAISQUER DANOS GERAIS, ESPECIAIS,
 * FORTUITOS OU EMERGENTES, ADVINDOS DO USO OU IMPOSSIBILIDADE DE USO DO PROGRAMA (INCLUINDO, ENTRE OUTROS, PERDAS
 * DE DADOS OU DADOS SENDO GERADOS DE FORMA IMPRECISA, PERDAS SOFRIDAS POR VOCÊ OU TERCEIROS OU A IMPOSSIBILIDADE DO
 * PROGRAMA DE OPERAR COM QUAISQUER OUTROS PROGRAMAS), MESMO QUE ESSE TITULAR, OU OUTRA PARTE, TENHA SIDO ALERTADA
 * SOBRE A POSSIBILIDADE DE OCORRÊNCIA DESSES DANOS.
 *
 * @author		João Batista Neto
 * @copyright	Copyright(c) 2010, João Batista Neto
 * @license		http://creativecommons.org/licenses/GPL/2.0/deed.pt
 * @license		http://creativecommons.org/licenses/GPL/2.0/legalcode.pt
 * @package		rpo
 * @subpackage	util
 */
namespace rpo\util;

use rpo\base\BaseObject;

/**
 * Interface para definição de uma coleção de objetos
 * @package		rpo
 * @subpackage	util
 * @license		http://creativecommons.org/licenses/GPL/2.0/legalcode.pt
 */
interface Collection extends \rpo\base\BaseObject, \Countable, \IteratorAggregate {
	/**
	 * Adiciona um novo objeto à coleção
	 * @param \rpo\base\BaseObject $object
	 */
	public function add( BaseObject $object );

	/**
	 * Adiciona todos os objetos de uma outra coleção à esta coleção
	 * @param \rpo\util\Collection $collection
	 */
	public function addAll( Collection $collection );

	/**
	 * Limpa a coleção
	 * @see \rpo\util\Collection::isEmpty()
	 */
	public function clear();

	/**
	 * Verifica se um determinado objeto está contido na coleção
	 * @param \rpo\base\BaseObject $object
	 * @return boolean
	 */
	public function contains( BaseObject $object );

	/**
	 * Verifica se a coleção contém todos os objetos de uma outra coleção
	 * @param \rpo\util\Collection $collection
	 * @return boolean
	 */
	public function containsAll( Collection $collection );

	/**
	 * Substitui todos os elementos de uma coleção pelos contidos na matriz
	 * @param array $items Lista de itens
	 */
	public function exchangeArray( array $items );

	/**
	 * Recupera a classe que será utilizada para recuperar o Iterator de elementos
	 * da coleção
	 * @return string
	 * @see \IteratorAggregate::getIterator()
	 */
	public function getIteratorClass();

	/**
	 * Verifica se a coleção está vazia
	 * @return boolean
	 * @see \rpo\util\Collection::clear()
	 */
	public function isEmpty();

	/**
	 * Remove um elemento da coleção
	 * @param \rpo\base\BaseObject $object
	 */
	public function remove( BaseObject $object );

	/**
	 * Remove todos os elementos da coleção que estão contidos em outra coleção
	 * @param \rpo\util\Collection $collection
	 */
	public function removeAll( Collection $collection );

	/**
	 * Mantém na coleção apenas os objetos contidos em outra coleção
	 * @param \rpo\util\Collection $collection
	 */
	public function retainAll( Collection $collection );

	/**
	 * Define a classe que será utilizada para retornar o objeto Iterator
	 * @param string $class Nome da classe que implementa a interface Iterator
	 * @see \rpo\util\Collection::getIteratorClass()
	 */
	public function setIteratorClass( $class );

	/**
	 * Converte o objeto Collection em uma matriz contendo todos os elementos
	 * @return array
	 */
	public function toArray();

	/**
	 * Atualiza os índices da coleção depois de várias operações add() e remove()
	 */
	public function update();
}